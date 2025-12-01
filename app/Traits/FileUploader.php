<?php
namespace App\traits;

trait FileUploader
{
    // Konfiqurasiya: istəsən burada dəyişdir
    protected int $maxFileSize = 2 * 1024 * 1024; // 2MB
    protected array $endWith = ['jpg', 'jpeg', 'png'];
    protected array $endsWith = ['jpg', 'jpeg', 'png', 'pdf']; // icazə verilən uzantılar
    protected array $checkMime = ['image/jpeg','image/png','application/pdf'];

    /**
     * Tək fayl yükləmək
     * return array: ['success' => bool, 'file' => string|null, 'error' => string|null]
     *
     * $res = $this->fileSave('/var/www/private_uploads/id_cards', $_FILES, 'id_card');
     */
    public function fileSave(string $path, array $files, string $inputName): array
    {
        $result = array('success' => false, 'file' => null, 'error' => null);

        if (!isset($files[$inputName]) || $files[$inputName]['error'] === UPLOAD_ERR_NO_FILE) {
            $result['error'] = 'Fayl göndərilməyib.';
            return $result;
        }

        $file = $files[$inputName];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            $result['error'] = 'Upload zamanı xəta kodu: ' . $file['error'];
            return $result;
        }

        if ($file['size'] > $this->maxFileSize) {
            $result['error'] = 'Fayl çox böyükdür. Maksimum: ' . $this->maxFileSize . ' bayt';
            return $result;
        }

        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $this->endsWith, true)) {
            $result['error'] = 'Bu fayl növü icazə verilmir (uzantı).';
            return $result;
        }

        // MIME yoxlaması
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mime, $this->allowedMime, true)) {
            $result['error'] = 'Bu fayl növü icazə verilmir (MIME).';
            return $result;
        }

        // Əgər şəkildirsə əlavə yoxlama
        if (in_array($ext, $this->endWith, true)) {
            $imgInfo = @getimagesize($file['tmp_name']);
            if ($imgInfo === false) {
                $result['error'] = 'Göndərilən fayl şəkil kimi tanınmadı.';
                return $result;
            }
        }

        // qovluğu yarat
        if (!is_dir($path)) {
            if (!mkdir($path, 0755, true) && !is_dir($path)) {
                $result['error'] = 'Yükləmə qovluğu yaradıla bilmədi.';
                return $result;
            }
        }

        // unikal və təhlükəsiz ad yarat
        try {
            $random = bin2hex(random_bytes(8));
        } catch (\Exception $exception) {
            $random = uniqid('', true);
        }
        $fileNewName = $random . '_' . time() . '.' . $ext;
        $destination = FileUploader . phprtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileNewName;

        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            $result['error'] = 'Fayl serverə köçürülə bilmədi.';
            return $result;
        }

        // Fayl uğurla yükləndi
        $result['success'] = true;
        $result['file'] = $fileNewName;
        return $result;
    }

    /**
     * Çoxlu fayl yükləmək
     * return array: ['success' => true/false, 'files' => [...], 'errors' => [...]]
     */
    public function multiFileSave(string $path, array $files, string $inputName): array
    {
        $result = ['success' => false, 'files' => [], 'errors' => []];

        if (!isset($files[$inputName])) {
            $result['errors'][] = 'Fayl sahəsi tapılmadı.';
            return $result;
        }

        $fileArray = $this->reArrayFiles($files[$inputName]);

        foreach ($fileArray as $file) {
            // istifadə et fileSave-ın yoxlamalarını, ancaq local massivdən
            $tmpFiles = [$inputName => $file];
            $res = $this->fileSave($path, $tmpFiles, $inputName);

            if ($res['success']) {
                $result['files'][] = $res['file'];
            } else {
                $result['errors'][] = $res['error'] ?? 'Naməlum xəta';
            }
        }

        $result['success'] = count($result['errors']) === 0;
        return $result;
    }

    /**
     * Fayl silmək
     * return bool
     */
    public function fileDelete(string $path): bool
    {
        if (!file_exists($path)) {
            return false;
        }
        return @unlink($path);
    }

    /**
     * Faylı yeniləmək
     * $res = $this->fileUpdate($oldFileName, $_FILES['id_card'], '/var/www/private_uploads/id_cards');
     * return array same as fileSave
     */
    public function fileUpdate(?string $oldName, ?array $fileArray, string $path): array
    {
        // yeni fayl gəlməyibsə sadəcə uğurla köhnə adı saxla
        if (empty($fileArray) || $fileArray['error'] === UPLOAD_ERR_NO_FILE) {
            return ['success' => true, 'file' => $oldName, 'error' => null];
        }

        // yeni faylı yüklə
        $tmpFiles = ['tmp' => $fileArray];
        $res = $this->fileSave($path, $tmpFiles, 'tmp');

        if (!$res['success']) {
            return $res; // error ilə qaytar
        }

        // uğurlu olduqda köhnə faylı sil
        if (!empty($oldName)) {
            $oldPath = FileUploader . phprtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $oldName;
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }

        return $res;
    }

    /**
     * PHP multi-file array formatını asan işlək hala gətirmək
     */
    private function reArrayFiles(array $file_post): array
    {
        $file_ary = [];
        $file_count = is_array($file_post['name']) ? count($file_post['name']) : 0;
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }
}

<?php

namespace App\Traits;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Exception;

trait FileUploader
{
    /**
     * @throws Exception
     */
    public function fileSaveLaravel(string $path, UploadedFile $file, string $prefix = 'file'): string
    {
        // 1️⃣ Fayl doğrudanmı yüklənib?
        if (!$file->isValid()) {
            throw new \Exception('Fayl yüklənərkən xəta baş verdi');
        }

        // 2️⃣ İcazə verilən MIME tiplər (real təhlükəsizlik)
        $allowedMimeTypes = [
            'image/jpeg',
            'image/png',
            'image/webp',
        ];

        if (!in_array($file->getMimeType(), $allowedMimeTypes)) {
            throw new \Exception('Yalnız JPG, PNG və WEBP formatlarına icazə verilir');
        }

        // 3️⃣ Maksimum ölçü (2MB)
        $maxSize = 2 * 1024 * 1024; // 2MB
        if ($file->getSize() > $maxSize) {
            throw new \Exception('Fayl ölçüsü maksimum 2MB olmalıdır');
        }

        // 4️⃣ Qovluq yoxdursa yarat
        $fullPath = public_path($path);
        if (!is_dir($fullPath)) {
            mkdir($fullPath, 0755, true);
        }

        // 5️⃣ Təhlükəsiz unikal ad
        $extension = $file->getClientOriginalExtension();
        $fileName = $prefix . '_' . Str::uuid() . '.' . $extension;

        // 6️⃣ Faylı köçür
        $file->move($fullPath, $fileName);

        // 7️⃣ DB üçün path qaytar
        return $path . $fileName;
    }


    public function fileSave($path, $files, $inputName)
    {
        $name = null;
        if (isset($files[$inputName]) && $files[$inputName]['error'] === UPLOAD_ERR_OK) {

            // echo '<pre>';
            // print_r($files);
            // die('-------');
            $tmpName = $files[$inputName]['tmp_name'];
            $fileName = $files[$inputName]['name'];

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $fileNewName = uniqid() . '.' . $ext; // unikal ad

            // $ext = explode('.', $fileName)[1];

            if (!in_array($ext, ['png', 'jpg'])) {
                die('Yalniz png, jpg upload olunmalidir');
            }

            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            move_uploaded_file($tmpName, to: $path . '/' . $fileNewName);
        }
        return $fileNewName;
    }

    /**
     * Çoxlu fayl yükləmək
     * $names = $this->multiFileSave('uploads/', $_FILES, 'inputName');
     */
    public function multiFileSave($path, $files, $inputName): array
    {
        $names = [];
        if (isset($files[$inputName])) {
            $fileArray = $this->reArrayFiles($files[$inputName]);
            foreach ($fileArray as $file) {
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                    $name = uniqid() . '.' . $ext;
                    if (!is_dir($path)) {
                        mkdir($path, 0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], $path . '/' . $name);
                    $names[] = $name;
                }
            }
        }
        return $names;
    }

    /**
     * Fayl silmək
     * $this->fileDelete('uploads/file.jpg');
     */
    public function fileDelete($path)
    {
        if (file_exists($path)) {
            unlink($path);
        }
        return true;
    }

    /**
     * Faylı yeniləmək
     * $src = $this->fileUpdate($oldName, isset($_FILES['foto']), $_FILES['foto'], 'uploads/');
     */
    public function fileUpdate($name, $fileSend, $file, $path)
    {
        if ($fileSend && isset($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {
            // köhnə faylı sil
            if (file_exists($path . '/' . $name)) {
                unlink($path . '/' . $name);
            }

            // yeni faylı yüklə
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $name = uniqid() . '.' . $ext;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            move_uploaded_file($file['tmp_name'], $path . '/' . $name);
        }

        return $name;
    }

    /**
     * @throws Exception
     */
    public function fileSaveLrvl(string $path, $file): ?string
    {
        if (file_exists($file)==null) {
            return null;
        }

        $ext = $file->getClientOriginalExtension();

        if (!in_array($ext, ['png', 'jpg', 'jpeg', 'webp'])) {
            throw new Exception('Yalnız png, jpg, jpeg, webp icazəlidir');
        }

        $fileName = uniqid() . '.' . $ext;

        $file->storeAs($path, $fileName, 'public');

        return $fileName;
    }
    /**
     * PHP multi-file array formatını asan işlək hala gətirmək
     */
    private function reArrayFiles($file_post)
    {
        $file_ary = [];
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
        return $file_ary;
    }
}

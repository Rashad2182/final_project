@extends('back.layouts.master')

@section('title')
    Create Home Banner
@endsection

@section('css')
    <style>
        body {
            background-color: #1a1a1a;
        }

        .page-wrapper {
            background-color: #1a1a1a;
        }

        .container-fluid {
            background-color: #1a1a1a;
        }

        .form-card {
            background: #2d2d2d;
            border: 3px solid #dc3545;
            border-radius: 5px;
        }

        .form-inner {
            background: #2d2d2d;
            border-radius: 5px;
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #e0e0e0;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 5px;
            border: 2px solid #dc3545;
            padding: 12px 15px;
            background-color: #1a1a1a;
            color: #e0e0e0;
        }

        .form-control:focus, .form-select:focus {
            border-color: #dc3545;
            box-shadow: none;
            background-color: #1a1a1a;
            color: #e0e0e0;
        }

        .form-select option {
            background-color: #2d2d2d;
            color: #e0e0e0;
        }

        .image-preview-container {
            width: 100%;
            height: 300px;
            border: 3px solid #dc3545;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #1a1a1a;
            cursor: pointer;
        }

        .image-preview-container:hover {
            border-color: #c82333;
            background: #1a1a1a;
        }

        .image-preview-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .upload-placeholder {
            text-align: center;
            color: #a0a0a0;
        }

        .upload-placeholder i {
            font-size: 4rem;
            color: #dc3545;
            margin-bottom: 15px;
        }

        .upload-placeholder .text-muted {
            color: #808080 !important;
        }

        .btn-gradient {
            background: #2d2d2d;
            border: 2px solid #dc3545;
            color: #dc3545;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 600;
        }

        .btn-gradient:hover {
            background: #dc3545;
            color: white;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0a0a0;
        }

        .input-icon .form-control {
            padding-left: 45px;
        }

        .section-title {
            color: #dc3545;
            font-weight: 400;
            font-size: 1.8rem;
            margin-bottom: 0;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            background: #2d2d2d;
            border: 3px solid #dc3545;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #dc3545;
        }

        .text-danger {
            color: #ff6b6b !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="form-card p-4 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="section-icon me-3">
                            <i class="bi bi-images"></i>
                        </div>
                        <h2 class="section-title">Yeni Home Banner</h2>
                    </div>

                    <div class="form-inner">
                        <form action="{{ route('home_banners.store') }}" method="POST" enctype="multipart/form-data" onsubmit="'{{ route('home_banners.index') }}?lang=az'">
                            @csrf

                            <div class="row">
                                <!-- Language Selection -->
                                <div class="col-md-6 mb-4">
                                    <label for="lang" class="form-label">
                                        <i class="bi bi-translate me-2"></i>Dil
                                    </label>
                                    <select name="lang" id="lang" class="form-select">
                                        @foreach(config('app.languages') as $code => $name)
                                        <option value="{{ $code }}"
                                             @selected(old('lang', 'az') == $code)>
                                            {{ $name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('lang')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Order No -->
                                <div class="col-md-6 mb-4">
                                    <label for="order_no" class="form-label">
                                        <i class="bi bi-sort-numeric-down me-2"></i>Sıra Nömrəsi
                                    </label>
                                    <input type="number" name="order_no" id="order_no" class="form-control"
                                           placeholder="Sıra nömrəsini daxil edin..." value="{{ old('order_no', 0) }}"
                                           min="0">
                                    @error('order_no')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Alt Text -->
                                <div class="col-md-6 mb-4">
                                    <label for="alt" class="form-label">
                                        <i class="bi bi-card-text me-2"></i>Alt Text
                                    </label>
                                    <input type="text" name="alt" id="alt" class="form-control"
                                           placeholder="Şəkil üçün alternativ mətn..." value="{{ old('alt') }}">
                                    @error('alt')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image Upload -->
                                <div class="col-12 mb-4">
                                    <label for="image" class="form-label">
                                        <i class="bi bi-image me-2"></i>Banner Şəkli
                                    </label>
                                    <div class="image-preview-container mb-3" id="imagePreviewContainer">
                                        <div class="upload-placeholder">
                                            <i class="bi bi-cloud-upload"></i>
                                            <p class="mb-0">Şəkil yükləmək üçün klikləyin</p>
                                            <small class="text-muted">Maksimum fayl ölçüsü: 5MB</small>
                                        </div>
                                    </div>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                           style="display: none;">
                                    @error('image')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Title -->
                                <div class="col-12 mb-4">
                                    <label for="title" class="form-label">
                                        <i class="bi bi-fonts me-2"></i>Başlıq
                                    </label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           placeholder="Banner başlığını daxil edin..." value="{{ old('title') }}">
                                    @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div class="col-md-6 mb-4">
                                    <label for="address" class="form-label">
                                        <i class="bi bi-geo-alt me-2"></i>Ünvan
                                    </label>
                                    <div class="input-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <input type="text" name="address" id="address"
                                               class="form-control" placeholder="Ünvanı daxil edin..."
                                               value="{{ old('address') }}">
                                    </div>
                                    @error('address')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label">
                                        <i class="bi bi-telephone me-2"></i>Telefon
                                    </label>
                                    <div class="input-icon">
                                        <i class="bi bi-telephone-fill"></i>
                                        <input type="text" name="phone" id="phone"
                                               class="form-control" placeholder="Telefon nömrəsini daxil edin..."
                                               value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-end gap-3 mt-4">
                                <button type="submit" class="btn btn-gradient px-4">
                                    <i class="bi bi-check-circle me-2"></i>Yadda saxla
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Image Preview Functionality
        const imageInput = document.getElementById('image');
        const previewContainer = document.getElementById('imagePreviewContainer');

        previewContainer.addEventListener('click', function () {
            imageInput.click();
        });

        imageInput.addEventListener('change', function (e) {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (event) {
                    previewContainer.innerHTML = `<img src="${event.target.result}" alt="Preview">`;
                }

                reader.readAsDataURL(file);
            } else {
                previewContainer.innerHTML = `
                    <div class="upload-placeholder">
                        <i class="bi bi-cloud-upload"></i>
                        <p class="mb-0">Şəkil yükləmək üçün klikləyin</p>
                        <small class="text-muted">Maksimum fayl ölçüsü: 2MB</small>
                    </div>
                `;
            }
        });
    </script>
    <script>
        document.getElementById('src').addEventListener('change', function (event) {
            const preview = document.getElementById('imagePreviewController');
            const file = event.target.files[0];

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            } else {
                preview.src = '';
                preview.classList.add('d-none');
            }
        });
    </script>
@endsection



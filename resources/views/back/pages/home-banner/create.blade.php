@extends('back.layouts.master')

@section('title')
    Home Banner Əlavə Et
@endsection

@section('css')
    <style>
        .form-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .form-inner {
            background: white;
            border-radius: 15px;
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .image-preview-container {
            width: 100%;
            height: 300px;
            border: 3px dashed #dee2e6;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #f8f9fa;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .image-preview-container:hover {
            border-color: #667eea;
            background: #f0f2ff;
        }

        .image-preview-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .upload-placeholder {
            text-align: center;
            color: #6c757d;
        }

        .upload-placeholder i {
            font-size: 4rem;
            color: #dee2e6;
            margin-bottom: 15px;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
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
            color: #6c757d;
        }

        .input-icon .form-control {
            padding-left: 45px;
        }

        .section-title {
            color: white;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 0;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #667eea;
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
                        <form action="{{ route('home-banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Language Selection -->
                                <div class="col-md-6 mb-4">
                                    <label for="lang" class="form-label">
                                        <i class="bi bi-translate me-2"></i>Dil
                                    </label>
                                    <select name="lang" id="lang" class="form-select" required>
                                        <option value="{{ app()->getLocale() }}" selected>{{ app()->getLocale() }}</option>
                                        <option value="ru" {{ old('lang') == 'ru' ? 'selected' : '' }}>Русский</option>
                                        <option value="az" {{ old('lang') == 'az' ? 'selected' : '' }}>Azərbaycan
                                        </option>
                                        <option value="en" {{ old('lang') == 'en' ? 'selected' : '' }}>English</option>
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
                                            <small class="text-muted">Maksimum fayl ölçüsü: 2MB</small>
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
                                <a href="{{ route('home-banner.index') }}" class="btn btn-secondary px-4">
                                    <i class="bi bi-x-circle me-2"></i>Ləğv et
                                </a>
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
@endsection



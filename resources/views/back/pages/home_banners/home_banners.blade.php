@php use App\Models\HomeBanner; @endphp
@extends('back.layouts.master')

@section('title')
    Ana Səhifə Banner
@endsection

@section('css')
    <style>
        .banner-image {
            width: 80px;
            height: 50px;
            object-fit: cover;
            border: 3px solid black;
        }

        .action-buttons .btn {
            margin: 0 2px;
        }

        .card {
            border: 10px solid black !important;
            border-radius: 0;
        }

        .table thead th {
            background: black;
            color: white;
            font-weight: 600;
            border: 2px solid black;
        }

        .table {
            border: 2px solid black;
        }

        .table td {
            border: 1px solid black;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

    </style>
@endsection

@section('content')
    <div class="row" style="background-color: #000000">
        <div class="col-12">
            <div class="card" style="background-color: grey">
                <div class="card-header bg-transparent d-flex justify-content-between align-items-center py-3">
                    <h4 class="mb-0 fw-bold">
                        <i class="bi bi-image me-2"></i> Home Banners List
                    </h4>
                    <div class="d-flex align-items-center gap-3">
                        <select id="languageFilter" class="form-select" style="width: auto;"
                                name="lang"
                                onchange="window.location.href='{{ route('home_banners.index') }}?lang='+this.value">
                            @foreach(config('app.languages') as $code => $name)
                                <option
                                    value="{{ $code }}" {{ request('lang') == $code ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                        <a href="{{ route('home_banners.create') }}" class="btn btn-dark rounded-pill px-4">
                            <i class="bi bi-plus-circle me-1"></i> + Yeni Banner
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="bannersTable" class="table table-hover align-middle">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Dil</th>
                                <th>Sıra</th>
                                <th>Şəkil</th>
                                <th>Başlıq</th>
                                <th>Ünvan</th>
                                <th>Telefon</th>
                                <th class="text-center">Əməliyyatlar</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($banners as $banner)
                                <tr>
                                    <td><span class="badge bg-light text-dark">{{ $banner->id }}</span></td>
                                    <td><span class="badge bg-info">{{ strtoupper($banner->lang) }}</span></td>
                                    <td><span class="badge bg-secondary">{{ $banner->order_no }}</span></td>
                                    <td>
                                        @if($banner->image)
                                            <img src="{{ asset('files/home_banners/'.$banner->image) }}" alt="{{ $banner->alt ?? '' }}"
                                                 class="banner-image">
                                        @endif
                                    </td>
                                    <td>{{ $banner->title ?? '-' }}</td>
                                    <td>{{ $banner->address ?? '-' }}</td>
                                    <td>{{ $banner->phone ?? '-' }}</td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <button class="btn btn-primary" style="background-color: #0dcaf0">
                                                <a href="{{ route('home_banners.edit', $banner->id) }}"
                                                   style="color: #F0F0F0; text-decoration: none">
                                                    Update
                                                </a>
                                            </button>
                                            <form class="delete-form"
                                                  action="{{ route('home_banners.destroy', $banner->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-5">
                                        <i class="bi bi-inbox display-4 text-muted"></i>
                                        <p class="mt-3 text-muted">Heç bir banner tapılmadı</p>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#bannersTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/az.json'
                },
                order: [[10, 'asc']],
                pageLength: 10,
                responsive: true
            });

            $('#languageFilter').on('change', function () {
                const selectedLang = $(this).val();
                const url = new URL(window.location.href = "{{ route('home_banners.index') }}?lang=" + selectedLang);

                if (selectedLang) {
                    url.searchParams.set('lang', selectedLang);
                } else {
                    url.searchParams.delete('lang');
                }

                window.location.href = url.toString();
            });
        });
    </script>
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Silmək istədiyinizdən əminsiniz?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Bəli',
                    cancelButtonText: 'Xeyr'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection



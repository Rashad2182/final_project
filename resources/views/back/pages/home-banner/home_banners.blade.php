@extends('back.layouts.master')

@section('title')
    Ana Səhifə Banner
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <style>
        .banner-image {
            width: 80px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .action-buttons .btn {
            margin: 0 2px;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 12px;
        }

        .table thead th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 600;
            border: none;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center py-3">
                    <h4 class="mb-0 fw-bold">
                        <i class="bi bi-image me-2"></i>Ana Səhifə Banner İdarəetməsi
                    </h4>
                    <a href="{{ route('home-banners.create') }}" class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-plus-circle me-1"></i> Yeni Banner
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="bannersTable" class="table table-hover align-middle">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Dil</th>
                                <th>Şəkil</th>
                                <th>Başlıq</th>
                                <th>Ünvan</th>
                                <th>Telefon</th>
                                <th>Sıra</th>
                                <th class="text-center">Əməliyyatlar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($banners ?? [] as $banner)
                                <tr>
                                    <td><span class="badge bg-light text-dark">{{ $banner->id }}</span></td>
                                    <td><span class="badge bg-info">{{ strtoupper($banner->lang) }}</span></td>
                                    <td>
                                        @if($banner->image)
                                            <img src="{{ asset($banner->image) }}" alt="{{ $banner->title ?? '' }}"
                                                 class="banner-image">
                                        @else
                                            <span class="text-muted">Şəkil yoxdur</span>
                                        @endif
                                    </td>
                                    <td>{{ $banner->title ?? '-' }}</td>
                                    <td>{{ $banner->address ?? '-' }}</td>
                                    <td>{{ $banner->phone ?? '-' }}</td>
                                    <td><span class="badge bg-secondary">{{ $banner->order_no }}</span></td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <a href="{{ route('home-banners.edit', $banner->id) }}"
                                               class="btn btn-sm btn-warning rounded-circle"
                                               title="Redaktə et">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('home-banners.destroy', $banner->id) }}"
                                                  method="POST"
                                                  class="d-inline"
                                                  onsubmit="return confirm('Silmək istədiyinizdən əminsiniz?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-danger rounded-circle"
                                                        title="Sil">
                                                    <i class="bi bi-trash"></i>
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
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#bannersTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/az.json'
                },
                order: [[6, 'asc']],
                pageLength: 10,
                responsive: true
            });
        });
    </script>
@endsection



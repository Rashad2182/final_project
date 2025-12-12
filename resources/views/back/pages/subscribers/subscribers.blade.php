@extends('back.layouts.master')

@section('title')
    Abunə olan İstifadəçilər
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .table-wrap {
            background: #ffffff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .table thead th {
            background: #f8fafc;
            border-bottom: 0;
            font-size: 13px;
            letter-spacing: .5px;
            text-transform: uppercase;
            color: #6c757d;
        }

        .table tbody tr:hover {
            background: rgba(13, 110, 253, 0.06);
            transition: 0.2s;
        }

        .search-box {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07);
        }
    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="table-wrap">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0 fw-bold">Subscribers</h4>
                <form action="">
                    <div class="input-group search-box" style="width:300px;">
                <span class="input-group-text bg-white border-0">
                    <i class="bi bi-search"></i>
                </span>
                        <input id="searchInput" type="text" class="form-control border-0"
                               placeholder="Axtar... (ID / Email)">
                    </div>
                </form>

            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th class="text-end">Operations</th>
                    </tr>
                    </thead>
                    <tbody id="tableBody">
                    @foreach($subscribers as $key => $subscriber)
                        <tr>
                            <td>{{ $key + 1 }} </td>
                            <td>{{ $subscriber->email }}</td>
                            <td class="text-end">
                                <form action="{{ route('back.subscriber.destroy', [$subscriber->id]) }}" method="POST"
                                      class="delete-form d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="deleteBtn" class="btn btn-sm btn-danger"
                                            style="width: 50px;height: 30px;">
                                       Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('js')
    <script>
        const input = document.getElementById("searchInput");
        const rows = document.querySelectorAll("#tableBody tr");

        input.addEventListener("keyup", function () {
            const q = input.value.toLowerCase();

            rows.forEach(row => {
                const id = row.children[0].innerText.toLowerCase();
                const email = row.children[1].innerText.toLowerCase();

                if (id.includes(q) || email.includes(q)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
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



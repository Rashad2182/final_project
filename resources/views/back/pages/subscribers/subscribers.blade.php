@extends('back.layouts.admin')

@section('title')
    Abunə olan İstifadəçilər
@endsection

@section('css')
    <style>
        /* Qırmızı neon borderlı card */
        .card-redblack {
            background: #0d0d0d;
            border: 2px solid #b10000;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
        }

        /* Header */
        .card-redblack .card-header {
            background: linear-gradient(90deg, #b10000, #4d0000);
            border-bottom: 2px solid #b10000;
            color: white;
            font-weight: bold;
            letter-spacing: .5px;
        }

        /* Table */
        .table-redblack {
            color: #e4e4e4;
        }

        .table-redblack thead {
            background: #1a0000;
            color: #ff4444;
            border-bottom: 2px solid #b10000;
        }

        .table-redblack tbody tr {
            background: #0f0f0f;
            transition: 0.2s;
        }

        .table-redblack tbody tr:hover {
            background: #1a0000;
            color: #ff4444;
            transform: scale(1.01);
        }

        /* Search + Show input */
        .dark-input {
            background: #111;
            border: 1px solid #b10000;
            color: #fff;
        }

        .dark-input:focus {
            background: #1a0000;
            border-color: #ff0000;
            color: white;
            box-shadow: 0 0 8px rgba(255, 0, 0, 0.6);
        }

        /* Pagination */
        .pagination .page-link {
            background: #111;
            border: 1px solid #b10000;
            color: #ff4d4d;
        }

        .pagination .page-item.active .page-link {
            background: #b10000;
            border-color: #ff0000;
            color: #fff;
        }

        .pagination .page-link:hover {
            background: #4d0000;
            color: #fff;
        }
    </style>
@endsection

@section('content')

@endsection

@section('js')
    <script>
        function remover(myThis, title, confirmButtonText, cancelButtonText) {
            let form = myThis.closest("form");
            event.preventDefault();
            Swal.fire({
                title: title,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: confirmButtonText,
                cancelButtonText: cancelButtonText
            })
                .then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        form.submit();
                    }
                });
        }
    </script>
@endsection



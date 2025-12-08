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
    <div class="col-12">
        <div class="card card-redblack">
            <div class="card-header">
                <h3 class="card-title">Subscribers</h3>
            </div>

            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-secondary text-white">
                        Show
                        <div class="mx-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm dark-input" value="8" size="3">
                        </div>
                        entries
                    </div>
                    <div class="ms-auto text-secondary text-white">
                        Search:
                        <div class="ms-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm dark-input" placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-redblack text-nowrap">
                    <thead>
                    <tr>
                        <th><input class="form-check-input" type="checkbox"></th>
                        <th>#</th>
                        <th>email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscribers as $key => $subscribe) @endforeach
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $subscribe->email }}</td>
                        <td>
                            <form action="{{ route('back.subscriber.destroy'), ['$subscribe'] }}"
                                  method="POST"
                                  style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="remover($(this), @lang('messages.are you sure you want to delete?'), @lang('messages.delete'), @lang('messages.cencel');">
                                    <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        <td class="text-end"><button class="btn btn-sm btn-outline-danger">Actions</button></td>
                    </tr>
                    <!-- ... digərləri eyni qaydada ... -->
                    </tbody>
                </table>
            </div>

            <div class="card-footer d-flex align-items-center text-white">
                <p class="m-0">Showing 1 to 8 of 16 entries</p>

                <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>

        </div>
    </div>

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



@extends('')

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
                <h3 class="card-title">Subscribes</h3>
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
                        <th>No</th>
                        <th>Invoice Subject</th>
                        <th>Client</th>
                        <th>VAT No.</th>
                        <th>Created</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>001401</td>
                        <td>Design Works</td>
                        <td>Carlson Limited</td>
                        <td>87956621</td>
                        <td>15 Dec 2017</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>$887</td>
                        <td class="text-end"><button class="btn btn-sm btn-outline-danger">Actions</button></td>
                    </tr>

                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>001402</td>
                        <td>UX Wireframes</td>
                        <td>Adobe</td>
                        <td>87956421</td>
                        <td>12 Apr 2017</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>$1200</td>
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
@endsection



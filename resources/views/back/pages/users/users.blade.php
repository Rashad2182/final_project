@extends('back.layouts.master')

@section('title')
    Abunə olan İstifadəçilər
@endsection

@section('css')
    <style>
        body {
            background-color: #1a1a1a !important;
        }

        .container {
            background-color: black;
        }

        .table-wrap {
            background: black;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
        }

        .table-wrap h4 {
            color: #ffffff;
        }

        .table thead th {
            background: black;
            border-bottom: 0;
            font-size: 13px;
            letter-spacing: .5px;
            text-transform: uppercase;
            color: #a0a0a0;
        }

        .table tbody tr {
            color: #ffffff;
        }

        .table tbody tr:hover {
            background: rgba(255, 255, 255, 0.1);
            transition: 0.2s;
        }

        .search-box {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5);
            background: #1a1a1a;
        }

        .search-box .input-group-text {
            background-color: #1a1a1a !important;
            color: #a0a0a0;
        }

        .search-box .form-control {
            background-color: #1a1a1a !important;
            color: #ffffff;
        }

        .search-box .form-control::placeholder {
            color: #6c757d;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-4">
        <div class="table-wrap">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0 fw-bold">Users</h4>
                <form action="">
                    <div class="input-group search-box" style="width:300px;">
                <span class="input-group-text bg-white border-0">
                     <i class="fa fa-search"></i>
                </span>
                        <input id="searchInput" type="text" class="form-control border-0"
                               placeholder="Axtar...">
                    </div>
                </form>

            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody id="tableBody">
                    @foreach($users as $key => $user)
                        <tr>
                            <td class="table-dark">{{ $loop->iteration }} </td>
                            <td class="table-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="icon icon-tabler icons-tabler-outline icon-tabler-user-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4"/>
                                    <path d="M15 19l2 2l4 -4"/>
                                </svg>
                                @if($user->role_id === 1)
                                    admin
                                @else
                                    user
                                @endif
                            </td>

                            <td class="table-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="currentColor"
                                     class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z"/>
                                    <path
                                        d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z"/>
                                </svg>
                                {{ $user->fullname }}
                            </td>

                            <td class="table-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="15" viewBox="0 0 24 24"
                                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6"/>
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"/>
                                    <path d="M3 19l6 -6"/>
                                    <path d="M15 13l6 6"/>
                                </svg>
                                {{ $user->email }}
                            </td>

                            <td class="table-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="icon icon-tabler icons-tabler-outline icon-tabler-user-off">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path
                                        d="M8.18 8.189a4.01 4.01 0 0 0 2.616 2.627m3.507 -.545a4 4 0 1 0 -5.59 -5.552"/>
                                    <path
                                        d="M6 21v-2a4 4 0 0 1 4 -4h4c.412 0 .81 .062 1.183 .178m2.633 2.618c.12 .38 .184 .785 .184 1.204v2"/>
                                    <path d="M3 3l18 18"/>
                                </svg>
                                <form action="{{ route('back.users.destroy', [$user->id]) }}" method="POST"
                                      class="delete-form d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="deleteBtn" class="btn btn-sm btn-danger"
                                            style="width: 60px;height: 30px;">
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
@section('js')
    <script>
        const input = document.getElementById("searchInput");
        const rows = document.querySelectorAll("#tableBody tr");

        input.addEventListener("keyup", function () {
            const q = input.value.toLowerCase();

            rows.forEach(row => {
                // bütün sətrin text-i
                const rowText = row.innerText.toLowerCase();

                if (rowText.includes(q)) {
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



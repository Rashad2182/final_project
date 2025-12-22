/**
 * Main JS – Dashboard
 * Author: RH Project
 */

$(document).ready(function () {

    console.log('main.js loaded ✔');

    // DataTable auto init
    if ($.fn.DataTable) {
        $('.datatable').DataTable({
            responsive: true,
            pageLength: 10,
            language: {
                search: "Axtarış:",
                lengthMenu: "_MENU_ qeyd göstər",
                info: "_TOTAL_ qeyddən _START_ - _END_ arası",
                paginate: {
                    next: "Növbəti",
                    previous: "Əvvəlki"
                }
            }
        });
    }

    // Toastr global settings
    if (typeof toastr !== 'undefined') {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            timeOut: "3000",
            positionClass: "toast-top-right"
        };
    }

    // SweetAlert delete confirm example
    $('.btn-delete').on('click', function (e) {
        e.preventDefault();

        let url = $(this).attr('href');

        Swal.fire({
            title: 'Əminsiniz?',
            text: "Bu əməliyyatı geri qaytarmaq olmaz!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Bəli, sil',
            cancelButtonText: 'Ləğv et'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    });

});

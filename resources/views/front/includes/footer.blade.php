
<!-- Footer Start -->
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">@lang('messages.get in touch')</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>123 Street, New York, USA</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>+012 345 67890</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">@lang('messages.quick links')</h4>
                <a class="btn btn-link" href="">@lang('messages.about')</a>
                <a class="btn btn-link" href="">@lang('messages.contact us')</a>
                <a class="btn btn-link" href="">@lang('messages.our services')</a>
                <a class="btn btn-link" href="">@lang('messages.terms & condition')</a>
                <a class="btn btn-link" href="">@lang('messages.support')</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">@lang('messages.newsletter')</h4>
                <div class="position-relative mb-4">
                    @csrf
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" name="email"
                           id="subscribeEmail" placeholder="@lang('messages.your email')">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                            id="subscribeBtn">@lang('messages.subscribe')
                        <i class="fa-solid fa-paper-plane"></i></button>
                </div>
                <div class="d-flex pt-1 m-n1">
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">{{ config('app.name') }}</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@section('js')
    <script>
        $(document).ready(function () {
            $('#subscribeBtn').click(function () {

                let email = $('#subscribeEmail').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('front.subscribe.store') }}',
                    data: {
                        email: email,
                        _token: '{{ csrf_token() }}'
                    },

                    success: function (response) {
                        $('#subscribeEmail').val('');
                        toastr.success(response.success);
                    },
                    error: function (xhr) {
                        if (xhr.status === 422 && xhr.responseJSON.errors) {
                            let firstError = Object.values(xhr.responseJSON.errors)[0][0];
                            toastr.error(firstError);
                        } else {
                            toastr.error("@lang('toaster.error')");
                        }
                    },
                });

            });
        });
    </script>
    <script>
        toastr.options = {
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true,
            "timeOut": "5000"
        };
    </script>
@endsection

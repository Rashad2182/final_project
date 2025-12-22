 <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" style="width: 99%">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                    @foreach($banners as $banner)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="w-100" src="{{ asset('files/home_banners/'.$banner->image) }}" alt="{{ $banner->alt }}">
                            <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                                <div class="mx-sm-5 px-5" style="max-width: 900px;">
                                    <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">{{ $banner->title }}</h1>
                                    <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                            class="fa fa-map-marker-alt text-primary me-3"></i>{{ $banner->address }}
                                    </h4>
                                    <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                            class="fa fa-phone-alt text-primary me-3"></i>{{ $banner->phone }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>
    <!-- Carousel End -->



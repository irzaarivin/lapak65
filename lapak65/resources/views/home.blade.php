@extends('layouts.main')

@section('content')

        <main class="main">

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->
            <div class="banner-group">
                <div class="container">
                    <div class="row sliderPromo" style="margin-bottom: 80px; border-radius: 20px;">
                        <img style="border-radius: 20px;" src="{{ env('APP_URL') }}/assets/images/promo-1.png" alt="">
                        <img style="border-radius: 20px;" src="{{ env('APP_URL') }}/assets/images/promo-2.png" alt="">
                        <img style="border-radius: 20px;" src="{{ env('APP_URL') }}/assets/images/promo-3.png" alt="">
                        <img style="border-radius: 20px;" src="{{ env('APP_URL') }}/assets/images/promo-4.jpeg" alt="">
                    </div>

                    <script>
                        $('.sliderPromo').slick({
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          autoplay: true,
                          autoplaySpeed: 2000,
                          prevArrow: false,
                          nextArrow: false,
                          swipeToSlide: true,
                          pauseOnHover: false,
                          centermode: true,
                          centerPadding: '50px',
                        });
                    </script>

                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="shop">
                                    <img src="assets/images/demos/demo-2/banners/banner-1.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">Clearence</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Coffee Tables</h3><!-- End .banner-title -->
                                    <div class="banner-text">from Rp. 315000</div><!-- End .banner-text -->
                                    <a href="shop" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-md-6 col-lg-3">
                            <div class="banner banner-overlay">
                                <a href="shop">
                                    <img src="assets/images/demos/demo-2/banners/banner-2.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-bottom">
                                    <h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Amazing <br>Armchairs</h3><!-- End .banner-title -->
                                    <div class="banner-text text-white">from Rp. 625000</div><!-- End .banner-text -->
                                    <a href="shop" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-md-6 col-lg-4">
                            <div class="banner banner-overlay">
                                <a href="shop">
                                    <img src="assets/images/demos/demo-2/banners/banner-3.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle text-grey">New Arrivals</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Storage <br>Boxes & Baskets</h3><!-- End .banner-title -->
                                    <a href="shop" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner banner-overlay banner-overlay-light">
                                <a href="shop">
                                    <img src="assets/images/demos/demo-2/banners/banner-4.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Lamps Offer</h3><!-- End .banner-title -->
                                    <div class="banner-text">up to 30% off</div><!-- End .banner-text -->
                                    <a href="shop" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->

            <div class="mb-3"></div><!-- End .mb-6 -->

            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Newer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">Older</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Top Rated 9+</a>
                    </li>
                </ul>
            </div><!-- End .container -->

            <div class="container-fluid">
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">

                        @if($newer->count())

                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($newer as $data)

                                <div class="product product-11 text-center" style="border-radius: 20px;">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="{{ env('APP_URL') }}/product/{{ $data->id }}">
                                            <img src="assets/product/{{ $data->thumb }}" alt="{{ $data->name }}" class="product-image">
                                            {{-- <img src="assets/images/demos/demo-2/products/product-3-2.jpg" alt="Product image" class="product-image-hover"> --}}
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" id="form-wish-newer-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-wishlist?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->

                                    </figure><!-- End .product-media -->

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('form-wish-newer-{{ $data->id }}').addEventListener('click', function(event) {
                                        // mencegah link terfollow
                                        event.preventDefault();

                                        // mengambil URL tujuan dari atribut data-url
                                        var url = this.getAttribute('data-url');

                                        // menyiapkan objek XMLHttpRequest
                                        var xhr = new XMLHttpRequest();

                                        // menyiapkan callback untuk menangani respon dari server
                                        xhr.onload = function() {
                                          // memproses respon dari server
                                        };

                                        // mengirim permintaan ke server
                                        xhr.open('GET', url);
                                        xhr.send();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Berhasil ditambahkan ke wishlist',
                                            showConfirmButton: true,
                                            timer: 2500
                                        });
                                      });
                                    </script>

                                    <div class="product-body">
                                        <h3 class="product-title my-3"><a href="{{ env('APP_URL') }}/product/{{ $data->id }}">{{ $data->name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price" style="color: red;">
                                            <b>Rp. {{ $data->price }}</b>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" id="form-cart-newer-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('form-cart-newer-{{ $data->id }}').addEventListener('click', function(event) {
                                        // mencegah link terfollow
                                        event.preventDefault();

                                        // mengambil URL tujuan dari atribut data-url
                                        var url = this.getAttribute('data-url');

                                        // menyiapkan objek XMLHttpRequest
                                        var xhr = new XMLHttpRequest();

                                        // menyiapkan callback untuk menangani respon dari server
                                        xhr.onload = function() {
                                          // memproses respon dari server
                                        };

                                        // mengirim permintaan ke server
                                        xhr.open('GET', url);
                                        xhr.send();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Berhasil ditambahkan ke cart',
                                            showConfirmButton: true,
                                            timer: 2500
                                          });
                                      });
                                    </script>
                                </div><!-- End .product -->

                            @endforeach

                        </div><!-- End .owl-carousel -->

                        @else

                        <h2 class="text-center">No new items yet</h2>

                        @endif

                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">

                        @if($older->count())

                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($older as $data)

                                <div class="product product-11 text-center" style="border-radius: 20px;">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">Quick Sale</span>
                                        <a href="{{ env('APP_URL') }}/product/{{ $data->id }}">
                                            <img src="assets/product/{{ $data->thumb }}" alt="{{ $data->name }}" class="product-image">
                                            {{-- <img src="assets/images/demos/demo-2/products/product-6-2.jpg" alt="Product image" class="product-image-hover"> --}}
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" id="form-wish-older-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-wishlist?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->

                                    </figure><!-- End .product-media -->

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('form-wish-older-{{ $data->id }}').addEventListener('click', function(event) {
                                        // mencegah link terfollow
                                        event.preventDefault();

                                        // mengambil URL tujuan dari atribut data-url
                                        var url = this.getAttribute('data-url');

                                        // menyiapkan objek XMLHttpRequest
                                        var xhr = new XMLHttpRequest();

                                        // menyiapkan callback untuk menangani respon dari server
                                        xhr.onload = function() {
                                          // memproses respon dari server
                                        };

                                        // mengirim permintaan ke server
                                        xhr.open('GET', url);
                                        xhr.send();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Berhasil ditambahkan ke wishlist',
                                            showConfirmButton: true,
                                            timer: 2500
                                          });
                                      });
                                    </script>

                                    <div class="product-body">
                                        <h3 class="product-title my-3"><a href="{{ env('APP_URL') }}/product/{{ $data->id }}">{{ $data->name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price" style="color: red;">
                                            <b>Rp. {{ $data->price }}</b>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" id="form-cart-older-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('form-cart-older-{{ $data->id }}').addEventListener('click', function(event) {
                                        // mencegah link terfollow
                                        event.preventDefault();

                                        // mengambil URL tujuan dari atribut data-url
                                        var url = this.getAttribute('data-url');

                                        // menyiapkan objek XMLHttpRequest
                                        var xhr = new XMLHttpRequest();

                                        // menyiapkan callback untuk menangani respon dari server
                                        xhr.onload = function() {
                                          // memproses respon dari server
                                        };

                                        // mengirim permintaan ke server
                                        xhr.open('GET', url);
                                        xhr.send();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Berhasil ditambahkan ke cart',
                                            showConfirmButton: true,
                                            timer: 2500
                                          });
                                      });
                                    </script>
                                </div><!-- End .product -->

                            @endforeach

                        </div><!-- End .owl-carousel -->

                        @else

                        <h2>No old items yet</h2>

                        @endif

                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @forelse($topRated as $data)

                                <div class="product product-11 text-center" style="border-radius: 20px;">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new"><b>{{ $data->rating }}</b></span>
                                        <a href="{{ env('APP_URL') }}/product/{{ $data->id }}">
                                            <img src="assets/product/{{ $data->thumb }}" alt="{{ $data->name }}" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" id="form-wish-topRated-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-wishlist?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->

                                    </figure><!-- End .product-media -->

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('form-wish-topRated-{{ $data->id }}').addEventListener('click', function(event) {
                                        // mencegah link terfollow
                                        event.preventDefault();

                                        // mengambil URL tujuan dari atribut data-url
                                        var url = this.getAttribute('data-url');

                                        // menyiapkan objek XMLHttpRequest
                                        var xhr = new XMLHttpRequest();

                                        // menyiapkan callback untuk menangani respon dari server
                                        xhr.onload = function() {
                                          // memproses respon dari server
                                        };

                                        // mengirim permintaan ke server
                                        xhr.open('GET', url);
                                        xhr.send();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Berhasil ditambahkan ke wishlist',
                                            showConfirmButton: true,
                                            timer: 2500
                                          });
                                      });
                                    </script>

                                    <div class="product-body">
                                        <h3 class="product-title my-3"><a href="{{ env('APP_URL') }}/product/{{ $data->id }}">{{ $data->name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price" style="color: red;">
                                            <b>Rp. {{ $data->price }}</b>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" id="form-cart-topRated-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('form-cart-topRated-{{ $data->id }}').addEventListener('click', function(event) {
                                        // mencegah link terfollow
                                        event.preventDefault();

                                        // mengambil URL tujuan dari atribut data-url
                                        var url = this.getAttribute('data-url');

                                        // menyiapkan objek XMLHttpRequest
                                        var xhr = new XMLHttpRequest();

                                        // menyiapkan callback untuk menangani respon dari server
                                        xhr.onload = function() {
                                          // memproses respon dari server
                                        };

                                        // mengirim permintaan ke server
                                        xhr.open('GET', url);
                                        xhr.send();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Berhasil ditambahkan ke cart',
                                            showConfirmButton: true,
                                            timer: 2500
                                          });
                                      });
                                    </script>
                                </div><!-- End .product -->

                            @empty

                                <h2>No new items yet</h2>

                            @endforelse

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container-fluid -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="bg-light deal-container pt-5 pb-3 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="deal">
                                <div class="deal-content">
                                    <h4>Limited Quantities</h4>
                                    <h2>Deal of the Day</h2>

                                    <h3 class="product-title"><a href="shop">Kunti's Chair</a></h3><!-- End .product-title -->

                                    <div class="product-price">
                                        <span class="new-price">Rp. 2330000</span>
                                        <span class="old-price">Was Rp. 3750000</span>
                                    </div><!-- End .product-price -->

                                    <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->

                                    <a href="shop" class="btn btn-primary">
                                        <span>Shop Now</span><i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .deal-content -->
                                <div class="deal-image">
                                    <a href="shop">
                                        <img src="assets/images/demos/demo-2/deal/product-1.jpg" alt="image">
                                    </a>
                                </div><!-- End .deal-image -->
                            </div><!-- End .deal -->
                        </div><!-- End .col-lg-9 -->

                        <div class="col-lg-3">
                            <div class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block">
                                <a href="shop">
                                    <img src="assets/images/demos/demo-2/banners/banner-5.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top banner-content-center">
                                    <h4 class="banner-subtitle">The Best Choice</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">AGEN</h3><!-- End .banner-title -->
                                    <div class="banner-text text-primary">Rp. 765000</div><!-- End .banner-text -->
                                    <a href="shop" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Top Selling Products</h2><!-- End .title -->

                    {{-- <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab" aria-controls="top-fur-tab" aria-selected="false">Furniture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab" aria-controls="top-decor-tab" aria-selected="false">Decoration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab" aria-controls="top-light-tab" aria-selected="false">Lighting</a>
                        </li>
                    </ul> --}}
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">

                                @forelse($topSale as $data)

                                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                        <div class="product product-11 text-center" style="border-radius: 20px;">
                                            <figure class="product-media">
                                                <a href="{{ env('APP_URL') }}/product/{{ $data->id }}">
                                                    <img src="{{ env('APP_URL') }}/assets/product/{{ $data->thumb }}" alt="{{ $data->name }}" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" id="form-wish-topSale-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-wishlist?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to wishlist</span></a>
                                                </div><!-- End .product-action-vertical -->
                                            </figure><!-- End .product-media -->

                                            <script>
                                              // menangani event click pada tag anchor
                                              document.getElementById('form-wish-topSale-{{ $data->id }}').addEventListener('click', function(event) {
                                                // mencegah link terfollow
                                                event.preventDefault();

                                                // mengambil URL tujuan dari atribut data-url
                                                var url = this.getAttribute('data-url');

                                                // menyiapkan objek XMLHttpRequest
                                                var xhr = new XMLHttpRequest();

                                                // menyiapkan callback untuk menangani respon dari server
                                                xhr.onload = function() {
                                                  // memproses respon dari server
                                                };

                                                // mengirim permintaan ke server
                                                xhr.open('GET', url);
                                                xhr.send();

                                                Swal.fire({
                                                    position: 'top-end',
                                                    icon: 'success',
                                                    title: 'Berhasil ditambahkan ke wishlist',
                                                    showConfirmButton: true,
                                                    timer: 2500
                                                  });
                                              });
                                            </script>

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Sold <b>{{ $data->sold }}</b></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title my-3"><a href="{{ env('APP_URL') }}/product/{{ $data->id }}">{{ $data->name }}</a></h3><!-- End .product-title -->
                                                <div class="product-price" style="color: red;">
                                                    <b>RP. {{ $data->price }}</b>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" id="form-cart-topSale-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->

                                            <script>
                                              // menangani event click pada tag anchor
                                              document.getElementById('form-cart-topSale-{{ $data->id }}').addEventListener('click', function(event) {
                                                // mencegah link terfollow
                                                event.preventDefault();

                                                // mengambil URL tujuan dari atribut data-url
                                                var url = this.getAttribute('data-url');

                                                // menyiapkan objek XMLHttpRequest
                                                var xhr = new XMLHttpRequest();

                                                // menyiapkan callback untuk menangani respon dari server
                                                xhr.onload = function() {
                                                  // memproses respon dari server
                                                };

                                                // mengirim permintaan ke server
                                                xhr.open('GET', url);
                                                xhr.send();

                                                Swal.fire({
                                                    position: 'top-end',
                                                    icon: 'success',
                                                    title: 'Berhasil ditambahkan ke cart',
                                                    showConfirmButton: true,
                                                    timer: 2500
                                                  });
                                              });
                                            </script>
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                @empty

                                    <h2>No new items yet</h2>

                                @endforelse

                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->
        </main><!-- End .main -->

@endsection
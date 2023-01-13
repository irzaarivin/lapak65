@extends('layouts.main')

@section('content')

    <main class="main">

        <div class="page-content" style="margin-top: 40px;">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-separated">
                                <span class="product-label label-sale">Sale</span>
                                <figure class="product-separated-item">
                                    <img src="{{ env('APP_URL') }}/assets/product/{{ $product->thumb }}" data-zoom-image="{{ env('APP_URL') }}/assets/product/{{ $product->thumb }}" alt="{{ $product->name }}">
                                </figure>
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details sticky-content">
                                <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: {{ $product->rating }}0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-accordion" id="review-link">( {{ $product->sold }} Reviews )</a>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    <span class="new-price">Rp. {{ number_format($product->price, 0, ",", ".") }}</span>
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p>{{ $product->description }}</p>
                                </div><!-- End .product-content -->

                                <div class="product-details-action">
                                    <a href="#" id="add-cart-{{ $product->id }}" class="btn-product btn-cart" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $product->id }}"><span>Add to cart</span></a>

                                    <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('add-cart-{{ $product->id }}').addEventListener('click', function(event) {
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

                                    <div class="details-action-wrapper">
                                        <a href="#" id="add-wish-{{ $product->id }}" class="btn-product btn-wishlist" title="Wishlist" data-url="{{ env('APP_URL') }}/add-wishlist?_token={{ csrf_token() }}&product={{ $product->id }}"><span>Add to Wishlist</span></a>
                                        <a href="{{ env('APP_URL') }}/checkout?product={{ $product->id }}" class="btn-product btn-compare" title="Compare"><span>Checkout</span></a>

                                        <script>
                                          // menangani event click pada tag anchor
                                          document.getElementById('add-wish-{{ $product->id }}').addEventListener('click', function(event) {
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
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->

                                <div class="accordion accordion-plus product-details-accordion" id="product-accordion">
                                    <div class="card card-box card-sm">
                                        <div class="card-header" id="product-desc-heading">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-desc" aria-expanded="false" aria-controls="product-accordion-desc">
                                                    Description
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="product-accordion-desc" class="collapse" aria-labelledby="product-desc-heading" data-parent="#product-accordion">
                                            <div class="card-body">
                                                <div class="product-desc-content">
                                                    <p>{{ $product->description }}</p>
                                                </div><!-- End .product-desc-content -->
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card card-box card-sm">
                                        <div class="card-header" id="product-shipping-heading">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-shipping" aria-expanded="false" aria-controls="product-accordion-shipping">
                                                    Shipping & Returns
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="product-accordion-shipping" class="collapse" aria-labelledby="product-shipping-heading" data-parent="#product-accordion">
                                            <div class="card-body">
                                                <div class="product-desc-content">
                                                    <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our Delivery information. We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our Returns information</p>
                                                </div><!-- End .product-desc-content -->
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->
                                </div><!-- End .accordion -->
                                <div class="product-details-footer">
                                    {{-- <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="#">Women</a>,
                                        <a href="#">Dresses</a>,
                                        <a href="#">Yellow</a>
                                    </div> --}}

                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <hr class="mt-3 mb-5">

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":1
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
                                "items":4,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>

                    @forelse($alsoLike as $data)

                        <div class="product product-7">
                            <figure class="product-media">
                                {{-- <span class="product-label label-new">New</span> --}}
                                <a href="{{ env('APP_URL') }}/product/{{ $data->id }}">
                                    <img src="{{ env('APP_URL') }}/assets/product/{{ $data->thumb }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable" id="add-wish-intention-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-wishlist?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                                <script>
                                  // menangani event click pada tag anchor
                                  document.getElementById('add-wish-intention-{{ $data->id }}').addEventListener('click', function(event) {
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

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" id="add-cart-intention-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->id }}"><span>add to cart</span></a>
                                </div><!-- End .product-action -->

                                <script>
                                  // menangani event click pada tag anchor
                                  document.getElementById('add-cart-intention-{{ $data->id }}').addEventListener('click', function(event) {
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

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{ $data->stock }} Available</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{ env('APP_URL') }}/product/{{ $data->id }}">{{ $data->name }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    Rp. {{ number_format($data->price, 0, ",", ".") }}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: {{ $data->rating }}0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( {{ $data->sold }} Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                    @empty

                        <h1>This shop doesn't have any other items yet</h1>

                    @endforelse

                </div><!-- End .owl-carosel -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

@endsection
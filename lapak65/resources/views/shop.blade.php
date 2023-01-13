@extends('layouts.main')

@section('content')

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">{{ $request }}<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->

            <div class="page-content mt-2">
                <div class="container">
        			<div class="toolbox">
        				{{-- <div class="toolbox-left">
                            <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
        				</div> --}}

                        <div class="toolbox-center" style="width: 100%;">
                            <div class="toolbox-info" style="width: 100%; text-align: center;">
                                Showing <span>{{ $result->count() }} of 56</span> Products
                            </div>
                        </div>

        				{{-- <div class="toolbox-right">
        					<div class="toolbox-sort">
        						<label for="sortby">Sort by:</label>
        						<div class="select-custom">
									<select name="sortby" id="sortby" class="form-control">
										<option value="popularity" selected="selected">Most Popular</option>
										<option value="rating">Most Rated</option>
										<option value="date">Date</option>
									</select>
								</div>
        					</div>
        				</div> --}}
        			</div>

                    <div class="products">
                        <div class="row">

                            @forelse($result as $data)

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product" style="border-radius: 20px;">
                                        <figure class="product-media">
                                            <a href="{{ env('APP_URL') }}/product/{{ $data->id }}">
                                                <img src="assets/product/{{ $data->thumb }}" alt="{{ $data->name }}" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable" id="form-wish-product-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-wishlist?product={{ $data->id }}"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <script>
                                              // menangani event click pada tag anchor
                                              document.getElementById('form-wish-product-{{ $data->id }}').addEventListener('click', function(event) {
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

                                            <div class="product-action action-icon-top">
                                                <a href="#" class="btn-product btn-cart" id="form-cart-product-{{ $data->id }}" data-url="{{ env('APP_URL') }}/add-cart?product={{ $data->id }}"><span>add to cart</span></a>
                                                {{-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> --}}
                                                {{-- <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a> --}}
                                            </div><!-- End .product-action -->

                                            <script>
                                              // menangani event click pada tag anchor
                                              document.getElementById('form-cart-product-{{ $data->id }}').addEventListener('click', function(event) {
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
                                                Rp. {{ $data->price }}
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: {{ $data->rating }}0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( {{ $data->sold }} Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

                            @empty

                                <h2>No new items yet</h2>

                            @endforelse

                        </div><!-- End .row -->

                        {{-- <div class="load-more-container text-center">
                            <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
                        </div> --}}<!-- End .load-more-container -->
                    </div><!-- End .products -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

@endsection
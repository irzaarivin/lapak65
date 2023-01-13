@extends('layouts.main')

@section('content')

	<main class="main">
    	<div class="page-header text-center" style="background-image: url('{{ env('APP_URL') }}/assets/images/page-header-bg.jpg')">
    		<div class="container">
    			<h1 class="page-title">Wishlist<span>Shop</span></h1>
    		</div><!-- End .container -->
    	</div><!-- End .page-header -->

        <div class="page-content" style="margin-top: 30px;">
        	<div class="container">
				<table class="table table-wishlist table-mobile">
					<thead>
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Stock Status</th>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>

						@forelse($wishlist as $data)

							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="{{ env('APP_URL') }}/assets/product/{{ $data->product_thumb }}" alt="{{ $data->product_name }}">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="{{ env('APP_URL') }}/product/{{ $data->product_id }}">{{ $data->product_name }}</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">Rp. {{ number_format($data->product_price, 0, ",", ".") }}</td>
								<td class="stock-col"><span class="in-stock">In stock</span></td>
								<td class="action-col">
	                                <div class="dropdown">

	                                <a href="#" id="wishlist-add-cart-{{ $data->product_id }}" class="btn btn-block btn-outline-primary-2" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->product_id }}"><span>Add to cart</span></a>

	                                <script>
                                      // menangani event click pada tag anchor
                                      document.getElementById('wishlist-add-cart-{{ $data->product_id }}').addEventListener('click', function(event) {
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
								</td>

								<td class="remove-col"><a href="#" class="btn-remove" title="Remove Product" id="delete-wishlist-{{ $data->id }}" data-url="{{ env('APP_URL') }}/delete-wishlist?_token={{ csrf_token() }}&product={{ $data->id }}"><i class="icon-close"></i></a></td>

								<script>
                                  // menangani event click pada tag anchor
                                  document.getElementById('delete-wishlist-{{ $data->id }}').addEventListener('click', function(event) {
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
                                        title: 'successfully removed from your cart, please refresh',
                                        showConfirmButton: true,
                                        timer: 3000
                                    });
                                  });
                                </script>
							</tr>

						@empty

							<h1><a href="{{ env('APP_URL') }}/shop">Let's shopping</a></h1>

						@endforelse

					</tbody>
				</table><!-- End .table table-wishlist -->
            	<div class="wishlist-share">
            		<div class="social-icons social-icons-sm mb-2">
            			<label class="social-label">Share on:</label>
    					<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
    					<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
    					<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
    					<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
    					<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
            	</div><!-- End .wishlist-share -->
        	</div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

@endsection
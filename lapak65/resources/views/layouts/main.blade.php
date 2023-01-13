<!DOCTYPE html>
<html lang="en">

<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lapak65 - Most Secured E-Commerce</title>
    <meta name="keywords" content="Lapak65">
    <meta name="description" content="Lapak65 - Most Secured E-Commerce">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ env('APP_URL') }}/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ env('APP_URL') }}/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ env('APP_URL') }}/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="{{ env('APP_URL') }}/assets/images/icons/site.html">
    <link rel="mask-icon" href="{{ env('APP_URL') }}/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ env('APP_URL') }}/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/plugins/jquery.countdown.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/skins/skin-demo-2.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/demos/demo-2.css">
    <!-- Sweet Alert -->
    <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.all.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/sweetalert2.min.css">
    <!-- Slick JS -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>

    @if(session('successSubmit'))

        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your order will arrive soon, please wait a moment.',
                showConfirmButton: true,
                timer: 5000
            });
        </script>

    @endif

    <div class="page-wrapper">
        <header class="header header-2 header-intro-clearance">

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="{{ env('APP_URL') }}" class="logo">
                            <img src="{{ env('APP_URL') }}\assets\icons\logo-lapak-65.png" alt="Lapak65 Logo" width="60" height="5">
                        </a>

                        <a href="{{ env('APP_URL') }}" class="logo">
                            <h4>65</h4>
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="{{ env('APP_URL') }}/shop" method="POST">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    @csrf
                                    <input type="search" class="form-control" name="searchProduct" id="searchProduct" placeholder="Search product or category ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">

                        @auth

                            <div class="wishlist">
                                <a href="{{ env('APP_URL') }}/wishlist" title="Wishlist">
                                    <div class="icon">
                                        <i class="icon-heart-o"></i>
                                        <span class="wishlist-count badge">{{ $totalWishlist }}</span>
                                    </div>
                                    <p>Wishlist</p>
                                </a>
                            </div><!-- End .compare-dropdown -->

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <div class="icon">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-count">{{ $totalCart }}</span>
                                    </div>
                                    <p>Cart</p>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">

                                        @forelse($cart as $data)

                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="{{ env('APP_URL') }}/product/{{ $data->product_id }}">{{ $data->product_name }}</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x Rp. {{ number_format($data->product_price, 0, ",", ".") }}
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="{{ env('APP_URL') }}/product/{{ $data->product_id }}" class="product-image">
                                                        <img src="{{ env('APP_URL') }}/assets/product/{{ $data->product_thumb }}" alt="{{ $data->product_name }}">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product" id="delete-cart-{{ $data->id }}" data-url="{{ env('APP_URL') }}/delete-cart?_token={{ csrf_token() }}&product={{ $data->id }}"><i class="icon-close"></i></a>
                                            </div><!-- End .product -->

                                            <script>
                                              // menangani event click pada tag anchor
                                              document.getElementById('delete-cart-{{ $data->id }}').addEventListener('click', function(event) {
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

                                        @empty

                                            <h3>No items have been added yet</h3>

                                        @endforelse

                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">Rp. {{ number_format($totalPrice, 0, ",", ".") }}</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="account" class="btn btn-primary">View Cart</a>

                                        @if($cart->count())
                                            
                                            <a href="{{ env('APP_URL') }}/checkout?cart=true" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>

                                        @else

                                            <a href="{{ env('APP_URL') }}/shop" class="btn btn-outline-primary-2" disabled><span>Checkout</span><i class="icon-long-arrow-right"></i></a>

                                        @endif
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                            <div class="account">
                                <a href="account" title="My account">
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <p>{{ auth()->user()->name }}</p>
                                </a>
                            </div><!-- End .compare-dropdown -->

                        @else

                            <div class="wishlist">
                                <a href="{{ env('APP_URL') }}/account" title="Wishlist">
                                    <div class="icon">
                                        <i class="icon-heart-o"></i>
                                    </div>
                                    <p>Wishlist</p>
                                </a>
                            </div><!-- End .compare-dropdown -->

                            <div class="dropdown cart-dropdown">
                                <a href="{{ env('APP_URL') }}/account" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <div class="icon">
                                        <i class="icon-shopping-cart"></i>
                                    </div>
                                    <p>Cart</p>
                                </a>
                            </div><!-- End .cart-dropdown -->
                            <div class="account">
                                <a href="{{ env('APP_URL') }}/account" title="My account">
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <p>Account</p>
                                </a>
                            </div><!-- End .compare-dropdown -->

                        @endauth

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        @yield('content')

        <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>When you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

        	<div class="footer-newsletter bg-image" style="background-image: url({{ env('APP_URL') }}/assets/images/backgrounds/bg-2.jpg)">
        		<div class="container">
        			<div class="heading text-center">
                        <h3 class="title">Get The Latest Deals</h3><!-- End .title -->
                        <p class="title-desc">and receive <span>Rp. 320000 coupon</span> for first shopping</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="row">
                    	<div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form action="#">
    							<div class="input-group">

                                    @auth

    								<input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" aria-describedby="newsletter-btn" value="{{ auth()->user()->email }}" required>

                                    @else

                                    <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" aria-describedby="newsletter-btn" required>

                                    @endauth

    								<div class="input-group-append">
    									<button class="btn btn-primary" type="submit" id="newsletter-btn"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
    								</div><!-- .End .input-group-append -->
    							</div><!-- .End .input-group -->
                            </form>
                    	</div><!-- End .col-sm-10 offset-sm-1 col-lg-6 offset-lg-3 -->
                    </div><!-- End .row -->
        		</div><!-- End .container -->
        	</div><!-- End .footer-newsletter bg-image -->

        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-12 col-lg-6">
	            			<div class="widget widget-about">
	            				<img src="{{ env('APP_URL') }}\assets\icons\logo-lapak-65.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Lapak 65 is a new e-commerce platform that is innovative, simple, and carries the concept of a collection of various shops in Indonesia. Stall 65 provides daily necessities, such as clothes, electronic devices, and others. All sales activity The security of buying and processing transactions will be guaranteed through the intermediary of Lapak 65, because this website is equipped with a FaceId. This feature also differentiates Lapak 65 from other e-commerce sites. This concept is expected to create a form of online mall that can initiate and coordinate a number of transactions. </p>
	            				
	            				<div class="widget-about-info">
	            					<div class="row">
	            						<div class="col-sm-6 col-md-4">
	            							<span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <span class="widget-about-title">Our CS : Vyrdi Firmansyah</span>
	            							<a href="tel:123456789" style="font-size: 15px;">+62 896-0947-3704</a>
                                            <a href="https://wa.me/6289609473704" target="_blank" style="font-size: 15px;">Vyrdi Firmansyah</a>
	            						</div><!-- End .col-sm-6 -->
	            						<div class="col-sm-6 col-md-8">
	            							<span class="widget-about-title">Payment Method</span>
	            							<figure class="footer-payments">
							        			<img src="{{ env('APP_URL') }}/assets/images/payments.png" alt="Payment methods" width="272" height="20">
							        		</figure><!-- End .footer-payments -->
	            						</div><!-- End .col-sm-6 -->
	            					</div><!-- End .row -->
	            				</div><!-- End .widget-about-info -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-12 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Information</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="about.html">About Lapak 65</a></li>
	            					<li><a href="#">How to shop on Lapak 65</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="contact.html">Contact us</a></li>
	            					<li><a href="login.html">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Sign In</a></li>
	            					<li><a href="cart.html">View Cart</a></li>
	            					<li><a href="#">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-64 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2019 Lapak 65 Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<ul class="footer-menu">
	        			<li><a href="#">Terms Of Use</a></li>
	        			<li><a href="#">Privacy Policy</a></li>
	        		</ul><!-- End .footer-menu -->

	        		<div class="social-icons social-icons-color">
	        			<span class="social-label">Social Media</span>
    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            @auth

            <a href="#" class="btn-product active text-left" title="My account">
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
                <p>{{ auth()->user()->name }}</p>
            </a>

            @else

            <a href="account" class="btn-product active text-left" title="My account">
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
                <p>Account</p>
            </a>

            @endauth
            
            <form action="{{ env('APP_URL') }}/shop" method="POST" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                @csrf
                <input type="search" class="form-control" name="searchProduct" id="mobile-search" placeholder="Search product or category ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item" style="text-align: center;">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Wishlist</a>
                </li>
                <li class="nav-item" style="text-align: center;">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Cart </a>
                </li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">

                            @auth

                                @forelse($wishlist as $data)

                                    <li class="active">
                                        <a href="{{ env('APP_URL') }}/product/{{ $data->product_id }}">{{ $data->product_name }}</a>
                                        <ul style="padding: 10px 10px;">
                                            <li><img style="border-radius: 20px;" src="{{ env('APP_URL') }}/assets/product/{{ $data->product_thumb }}" alt="{{ $data->product_name }}"></li>
                                            <li style="margin: 15px 0;"><h3>Rp. {{ number_format($data->product_price, 0, ",", ".") }}</h3></li>
                                            <li><a href="#" class="btn btn-primary" id="sidebar-add-cart-{{ $data->product_id }}" data-url="{{ env('APP_URL') }}/add-cart?_token={{ csrf_token() }}&product={{ $data->product_id }}"><span style="color: white;">Add to cart</span></a></li>
                                        </ul>

                                        <script>
                                          // menangani event click pada tag anchor
                                          document.getElementById('sidebar-add-cart-{{ $data->product_id }}').addEventListener('click', function(event) {
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
                                    </li>

                                @empty

                                    <li><a href="{{ env('APP_URL') }}/shop">Let's shopping</a></li>

                                @endforelse

                            @endauth

                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">

                            @auth

                                @if($cart->count())

                                    @foreach($cart as $data)

                                        <li>
                                            <a class="mobile-cats-lead" href="{{ env('APP_URL') }}/product/{{ $data->product_id }}">{{ $data->product_name }} <br> Rp. {{ $data->product_price }}</a>
                                        </li>

                                    @endforeach

                                    <li style="text-align: center; padding-top: 20px;"><h3 style="text-align: center;">Rp. {{ number_format($totalPrice, 0, ",", ".") }}</h3></li>

                                    <li><a href="{{ env('APP_URL') }}/checkout?cart=true" class="btn btn-primary" title="Compare"><span style="color: white;">Checkout</span></a></li>

                                @else

                                    <li><a href="{{ env('APP_URL') }}/shop">LET'S SHOPPING</a></li>

                                @endif

                            @endauth

                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="{{ env('APP_URL') }}/assets/js/jquery.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/superfish.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/jquery.plugin.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ env('APP_URL') }}/assets/js/main.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/demos/demo-2.js"></script>
</body>
</html>
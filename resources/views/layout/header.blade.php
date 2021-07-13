<!-- header -->
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="/">
								<img src="{{asset('theme/img/logo-1.png')}}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/">Laman Utama</a>
								</li>
								<li><a href="/#about">Tentang Kami</a></li>
								<li><a href="#">Produk</a>
									<ul class="sub-menu">
										<li><a href="/product/C-Buckthorn-Oil">C-Buckthorn Oil</a></li>
										<li><a href="/product/Fair-Lady-Skincare-Set">Fair Lady Skincare Set</a></li>
										<!-- <li><a href="#">Stemcell Double Action Spray</a></li> -->
									</ul>
								</li>
								<li><a href="/shop/shop">Beli Sekarang</a></li>
								<li><a href="/contact-us">Hubungi Kami</a></li>
								<li><a href="#">Ahli</a>
									<ul class="sub-menu">
										<li><a href="{{ route('login') }}">Daftar Masuk</a></li>
										<li><a href="{{ route('register') }}">Daftar sebagai Ahli</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
									<a class="shopping-cart" href="#"><i class="fas fa-shopping-cart"> Troli </i><span class="badge badge-pill badge-danger ml-3">{{ count((array) session('cart')) }}</span></a>
									<ul class="sub-menu">
										<li>
											@if(session('cart'))
												@foreach(session('cart') as $id => $details)
													<div class="row ">
														<div class="col-lg-4 col-sm-4 col-4">
															<h6>{{ $details['name'] }}</h6>
														</div>
														<div class="col-lg-8 col-sm-8 col-8 text-right">
															<span class="price font-weight-light"> RM{{ $details['price'] }}</span>
															<br>
															<span class="count"> Quantity:{{ $details['quantity'] }}</span>
														</div>
													</div>
													<hr>
												@endforeach
											@endif
										</li>
										<li>  
											 @php $total = 0 @endphp
											@foreach((array) session('cart') as $id => $details)
												@php $total += $details['price'] * $details['quantity'] @endphp
											@endforeach
											<hr>
												<div class="col-lg-12 col-sm-12 col-12 text-center">
													<p>Total: <span class="font-weight-bold">RM {{ $total }}</span></p>
												</div>
											<hr>
										</li>
										<li>
										<a href="/shop/check-out" class="btn btn-primary btn-block">View all</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
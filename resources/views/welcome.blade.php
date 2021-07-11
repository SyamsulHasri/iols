@extends('layout.main')

@section('content')

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Fresh & Organic</p>
							<h1>Company TagLine / Product TagLine</h1>
							<div class="hero-btns">
								<a href="/shop" class="boxed-btn">Beli Sekrang</a>
								<a href="/contact-us" class="bordered-btn">Hubungi Kami</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-50" id="about">
		<div class="container" >

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3>Tentang <span class="orange-text">Kami</span></h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 ">
					<div class="list-box d-flex">
						<div class="list-icon">
							<i class="far fa-building"></i>
						</div>
						<div class="content">
							<h3>Syarikat</h3>
							<p>Kami adalah sebuah syarikat pengilangan yang mengeluarkan produk atas Jenama kami sendiri iaitu iOLS.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="list-box d-flex">
						<div class="list-icon">
							<i class="fas fa-boxes"></i>
						</div>
						<div class="content">
							<h3>Produk</h3>
							<p>Antara produk iOLS adalah C-Buckthorn oil khusus untuk jagaan kesihatan, Fair Lady Skincar Set dan juga Double Action Apple Stemcell.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 ">
					<div class="list-box d-flex">
						<div class="list-icon">
							<i class="fas fa-users"></i>
						</div>
						<div class="content">
							<h3>Pelanggan</h3>
							<p>Pelanggan kami meliputi semua lapisan masyarakat terutama golongan muda dan warga emas yang prihatin dengan penjagaan diri dan juga kesihatan.</p>
						</div>
					</div>
				</div>
			</div>

			<!-- featured section -->
			<div class="feature-bg">
				<div class="row">
					<div class="col-lg-7">
						<div class="featured-text">
							<h2 class="pb-3">Kenapa <span class="orange-text">iOLS</span> ?</h2>
							<div class="row">
								<div class="card">
									<div class="card-body">
										<p class="font-weight-bold">Kami menawarkan peluang perniagaan dengan pakej yang menarik untuk Distributors, Stokis, Agen dan juga dropship. </p>
										<p class="font-weight-bold">Selain keuntungan runcit, antara ganjaran yang kami tawarkan adalah; bonus prestasi, bonus jualan dan juga hadiah berbentuk barangan kemas, Telefon bimbit dan pakej pelancongan di dalam dan luar negara. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end featured section -->

		</div>
	</div>
	<!-- end latest news -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Penghantaran Percuma</h3>
							<p>Apabila membuat pesanan melebihi RM100</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Sokongan Pengguna</h3>
							<p>Dapatkan sokongan sepanjang hari.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Bayaran Balik</h3>
							<p>Dapatkan bayaran balik dalam masa 3 hari!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produk</span> Kami</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p> -->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset('theme/img/products/iols-oils.jpg')}}" alt=""></a>
						</div>
						<h3>C-Buckthorn Oil</h3>
						<p class="product-price"><span>RM</span> 175.00 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Beli Sekarang</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset('theme/img/products/iols-makeup.jpg')}}" alt=""></a>
						</div>
						<h3>Fair Lady Skincare Set</h3>
						<p class="product-price"><span>RM</span> 155.00 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Beli Sekarang</a>
					</div>
				</div>
				<!-- <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset('theme/img/products/iols-spray.jpg')}}" alt=""></a>
						</div>
						<h3>Stemcell Double Action Spray</h3>
						<p class="product-price"><span>RM</span> 80.00 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Beli Sekarang</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Pengasas <span class="orange-text">iOLS</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-1"></div>
						<h4>Jimmy Doe <span>Chairman</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-2"></div>
						<h4>Marry Doe <span>Ceo</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg team-bg-3"></div>
						<h4>Simon Joe <span>Coo</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3> <span class="orange-text">Testimoni</span> Pelanggan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('theme/img/avaters/avatar1.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Siti Marian <span>Consumer</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('theme/img/avaters/iols-female1.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Nurul Najiha <span>Member</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('theme/img/avaters/iols-female2.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Puter Asyikin <span>Distributor</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<!-- <div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2021</p>
						<h2>We are <span class="orange-text">iOLS Cosmetics</span></h2>
						<p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p> -->
						<!-- <a href="about.html" class="boxed-btn mt-4">know more</a> -->

						<!-- Button trigger modal -->
						<!-- <a type="button" class="boxed-btn mt-4" data-toggle="modal" data-target="#staticBackdrop">
							Read More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Modal -->
	<!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Term & Conditions</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, at inventore voluptate, nemo cumque voluptatibus sit quae accusantium dolorum ullam odio rerum! Autem non, veritatis ipsam praesentium recusandae distinctio possimus?
			</div>
			<div class="modal-footer"> -->
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				<!-- <a type="button" class="boxed-btn" data-dismiss="modal">Understood</a>
			</div>
			</div>
		</div>
	</div> -->
	<!-- end advertisement section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="{{asset('theme/img/company-logos/1.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('theme/img/company-logos/2.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('theme/img/company-logos/3.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('theme/img/company-logos/4.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{asset('theme/img/company-logos/5.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@endsection

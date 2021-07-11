@extends('layout.main')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section contact-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Ada sebarang pertanyaan?</p>
						<h1>Hubungi Kami</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Anda ada soalan?</h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p> -->
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat Kedai</h4>
							<p>iOLS Marketing, <br> No. 11 Nouvelle Industrial Park Meru, Jalan Hj Abdul Manan, <br> 41050 Klang Selangor</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Waktu Operasi</h4>
							<p>Isnin - Jumaat: 8 AM to 5 PM <br> Sabtu: 8 AM to 12 PM</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Hubungi</h4>
							<p>Phone: +603 3393 8834 <br> Email: support@iols.com.my</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Cari Lokasi Kami</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=My%20Ebrandtory%20Cosmetics%20Industries&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
	<!-- end google map section -->

@endsection

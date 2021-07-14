@extends('dashboard.layout.main')

@section('content')

	<div class="row mb-2 mb-xl-3">
		<div class="col-auto d-none d-sm-block">
			<h3><strong>{{auth()->user()->name}}({{auth()->user()->member_type}})</strong> Dashboard</h3>
		</div>

		<!-- <div class="col-auto ml-auto text-right mt-n1">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
					<li class="breadcrumb-item"><a href="#">AdminKit</a></li>
					<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
					<li class="breadcrumb-item active" aria-current="page">Analytics</li>
				</ol>
			</nav>
		</div> -->
	</div>

	<div class="card text-dark  mb-3">
		<div class="row g-0">
			<div class="col-md-2 text-center bg-primary">
				<i class="fas fa-link fa-7x mt-3"></i>
			</div>
			<div class="col-md-10 bg-info">
				<div class="card-body">
					<h3 class=" font-weight-bold mt-0">Pautan Rujukan Anda</h3>
					<div class="row">
						<div class="col-8">
							<div class="input-group input-group-lg">
								<span class="input-group-text" id="inputGroup-sizing-lg">https://</span>
								<input type="text" class="form-control form-control-lg"  value="{{$user->link->referral_link}}" id="myInput" readonly>
							</div>
						</div>
						<div class="col-4">
							<a onclick="Hello()" class="btn btn-lg btn-primary"> <i class="fas fa-copy"></i> Salin pautan</a>
						</div>
					</div>
					<p class="card-text"><small class="text-white">Gunakan pautan rujukan anda untuk mendaftar ahli bagi mendapatkan bonus-bonus yang lumayan.</small></p>
				</div>
			</div>
		</div>
	</div>


	<!-- <div class="row">
		<div class="col-xl-12 col-xxl-12 d-flex">
			<div class="w-100">
				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4">Sales</h5>
								<h1 class="mt-1 mb-3">2.382</h1>
								<div class="mb-1">
									<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
									<span class="text-muted">Since last week</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4">Visitors</h5>
								<h1 class="mt-1 mb-3">14.212</h1>
								<div class="mb-1">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
									<span class="text-muted">Since last week</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4">Earnings</h5>
								<h1 class="mt-1 mb-3">$21.300</h1>
								<div class="mb-1">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
									<span class="text-muted">Since last week</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4">Orders</h5>
								<h1 class="mt-1 mb-3">64</h1>
								<div class="mb-1">
									<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
									<span class="text-muted">Since last week</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
					 -->
@endsection

@section('javascript')
<script type="text/javascript">

function Hello() {
  var copyText = document.getElementById('myInput')
  copyText.select();
  document.execCommand('copy')
  console.log('Copied Text')
}

   
</script>
@endsection
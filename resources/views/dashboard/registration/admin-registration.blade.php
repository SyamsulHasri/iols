@extends('dashboard.layout.main')

@section('content')

	<div class="row mb-2 mb-xl-3">
		<div class="col-auto d-none d-sm-block">
			<h3>Pendaftaran <strong>Pentadbir</strong> </h3>
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

	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Maklumat Pentadbir</h5>
				<!-- <h6 class="card-subtitle text-muted">Bootstrap column layout.</h6> -->
			</div>
			<div class="card-body">
			<form method="post" action="{{ route('admin.create') }}">
				<!-- CROSS Site Request Forgery Protection -->
				@csrf
					<div class="mb-3">
						<label class="form-label" for="name">Nama</label>
						<input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" name="name" placeholder="Nama">
							<!-- Error -->
							@if ($errors->has('name'))
								<div class="error text-danger">
									<strong>{{ $errors->first('name') }}</strong>
								</div>
							@endif
					</div>
					<div class="row">
						<div class="mb-3 col-md-6">
							<label class="form-label" for="email">Email</label>
							<input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" id="email" name="email" placeholder="example@email.com">
								<!-- Error -->
							@if ($errors->has('email'))
								<div class="error text-danger">
									<strong>{{ $errors->first('email') }}</strong>
								</div>
							@endif
						</div>
						<div class="mb-3 col-md-6">
							<label class="form-label" for="phone_no">Nombor Telefon</label>
							<input type="text" class="form-control {{ $errors->has('phone_no') ? 'error' : '' }}" id="phone_no" name="phone_no" placeholder="0123456789" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
								<!-- Error -->
							@if ($errors->has('phone_no'))
								<div class="error text-danger">
									<strong>{{ $errors->first('phone_no') }}</strong>
								</div>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="mb-3 col-md-6">
							<label class="form-label" for="password">Kata Laluan</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Laluan">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="mb-3 col-md-6">
							<label class="form-label" for="inputPassword4">Sahkan Kata Laluan</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Kata Laluan">
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Hantar</button>
				</form>
			</div>
		</div>
	</div>

					
@endsection
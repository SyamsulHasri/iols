@extends('dashboard.layout.main')

@section('content')

	<div class="row mb-2 mb-xl-3">
		<div class="col-auto d-none d-sm-block">
			<h3>Pendaftaran <strong>Pengedar</strong> </h3>
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

    <form method="post" action="{{ route('distributor.create') }}">
        <!-- CROSS Site Request Forgery Protection -->
        @csrf

    <!-- Member Details -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title font-weight-bold">Maklumat Pengedar</h3>
			</div>
			<div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="member_type">Level</label>
                    <input type="text" class="form-control {{ $errors->has('member_type') ? 'error' : '' }}" id="member_type" name="member_type" value="Distributors" readonly>
                        <!-- Error -->
                        @if ($errors->has('member_type'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('member_type') }}</strong>
                            </div>
                        @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" name="name" placeholder="Nama" value="{{old('name')}}">
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
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" id="email" name="email" placeholder="example@email.com" value="{{old('email')}}">
                            <!-- Error -->
                        @if ($errors->has('email'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phone_no">Nombor Telefon</label>
                        <input type="text" class="form-control {{ $errors->has('phone_no') ? 'error' : '' }}" id="phone_no" name="phone_no" placeholder="0123456789" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{old('phone_no')}}"/>
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
			</div>
		</div>
	</div>
    <!-- Member Details -->

    <!-- Shipping Address -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title font-weight-bold">Alamat Penghantaran/Surat Menyurat</h3>
                <h6 class="card-subtitle text-muted">Sila pastikan alamat yang diisi adalah betul dan alamat terkini, bagi memudahkan proses penghantaran produk/surat-menyurat .</h6>
			</div>
			<div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="address1">Alamat 1</label>
                    <input type="text" class="form-control {{ $errors->has('address1') ? 'error' : '' }}" id="address1" name="address1" placeholder="Alamat 1" value="{{old('address1')}}">
                        <!-- Error -->
                        @if ($errors->has('address1'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </div>
                        @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address2">Alamat 2</label>
                    <input type="text" class="form-control {{ $errors->has('address2') ? 'error' : '' }}" id="address2" name="address2" placeholder="Alamat 2" value="{{old('address2')}}">
                        <!-- Error -->
                        @if ($errors->has('address2'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </div>
                        @endif
                </div>

                <div class="row">
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="postcode">Poskod</label>
                        <input type="text" class="form-control {{ $errors->has('postcode') ? 'error' : '' }}" id="postcode" name="postcode" placeholder="Poskod" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{old('postcode')}}">
                        <!-- Error -->
                        @if ($errors->has('postcode'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('postcode') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="city">Bandar</label>
                        <input type="text" class="form-control {{ $errors->has('city') ? 'error' : '' }}" id="city" name="city" placeholder="Bandar" value="{{old('city')}}">
                        <!-- Error -->
                        @if ($errors->has('city'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('city') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="state">Negeri</label>
                        <input type="text" class="form-control {{ $errors->has('state') ? 'error' : '' }}" id="state" name="state" placeholder="Negeri" value="{{old('state')}}">
                        <!-- Error -->
                        @if ($errors->has('state'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('state') }}</strong>
                            </div>
                        @endif
                    </div>
                    <!-- <div class="mb-3 col-md-4">
                        <label class="form-label" for="inputState">Negeri</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div> -->
       
                    <div class="mb-3 col-md-2" hidden>
                        <label class="form-label" for="country">Negara</label>
                        <input type="text" class="form-control" id="country" name="country" value="Malaysia">
                    </div>
                </div>

			</div>
		</div>
	</div>
    <!-- Shipping Address -->

    <!--Bank Details -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title font-weight-bold">Maklumat Bank</h3>
                <h6 class="card-subtitle text-muted">Sila pastikan maklumat bank anda adalah betul, untuk tujuan pemindahan wang bonus.</h6>
			</div>
			<div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="bank_name">Nama Bank</label>
                    <input type="text" class="form-control {{ $errors->has('bank_name') ? 'error' : '' }}" id="bank_name" name="bank_name" placeholder="Nama Bank" value="{{old('bank_name')}}">
                        <!-- Error -->
                        @if ($errors->has('bank_name'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </div>
                        @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="bank_no">Nombor Akaun Bank</label>
                    <input type="text" class="form-control {{ $errors->has('bank_no') ? 'error' : '' }}" id="bank_no" name="bank_no" placeholder="No. Akaun Bank" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="{{old('bank_no')}}">
                        <!-- Error -->
                        @if ($errors->has('bank_no'))
                            <div class="error text-danger">
                                <strong>{{ $errors->first('bank_no') }}</strong>
                            </div>
                        @endif
                </div>

			</div>
		</div>
	</div>
    <!--Bank Details -->

        <button type="submit" class="btn btn-primary">Hantar</button>
	</form>

					
@endsection
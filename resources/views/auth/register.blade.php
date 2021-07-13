
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="shortcut icon" href="{{asset('theme/img/iols-logo.png')}}" />

	<title>iOLS Cosmetics - System</title>

	<link href="{{asset('dashboard/static/css/app.css')}}" rel="stylesheet">
</head>

<body>
	<main class="d-flex bg-secondary text-dark">
		<div class="container d-flex flex-column">
			<div class="row vh-100 pt-4">
				<div class="col-sm-10 col-md-10 col-lg-10 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="text-center">
							<h1 class="h2">
                                <a href="/">
                                <img src="{{asset('theme/img/logo-1.png')}}" alt="">
                                </a>
                            </h1>
							<p class="lead font-weight-bold">
                                Daftar sebagai ahli
							</p>
						</div>

                        <form method="post" action="{{ route('distributor.create') }}">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf

                            <!-- Member Details -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title font-weight-bold">Maklumat Ahli</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Penerangan tentang jenis ahli.</label>
                                            @if($member === 'Distributors')
                                                <p class="mb-0"> Distributors: Diskaun sebanyak 35% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM7,500.00 .</p>
                                                <p class="mb-0"> Stokist: Diskaun sebanyak 25% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM5,500.00 .</p>
                                                <p class="mb-0"> Agent: Diskaun sebanyak 15% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM2,500.00 .</p>
                                                <p class="mb-0"> Mini Agent: Diskaun sebanyak 10% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM750.00 .</p>
                                                <p class="mb-0"> Dropship: Diskaun sebanyak 7% dari harga retail produk .</p>
                                            @elseif($member === 'Stokist')
                                                <p class="mb-0"> Stokist: Diskaun sebanyak 25% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM5,500.00 .</p>
                                                <p class="mb-0"> Agent: Diskaun sebanyak 15% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM2,500.00 .</p>
                                                <p class="mb-0"> Mini Agent: Diskaun sebanyak 10% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM750.00 .</p>
                                                <p class="mb-0"> Dropship: Diskaun sebanyak 7% dari harga retail produk .</p>
                                            @elseif($member === 'Agent')
                                                <p class="mb-0"> Agent: Diskaun sebanyak 15% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM2,500.00 .</p>
                                                <p class="mb-0"> Mini Agent: Diskaun sebanyak 10% dari harga retail produk & pembelian pertama adalah minimun sebanyak RM750.00 .</p>
                                                <p class="mb-0"> Dropship: Diskaun sebanyak 7% dari harga retail produk .</p>
                                            @else
                                                <p class="mb-0"> Dropship: Diskaun sebanyak 7% dari harga retail produk .</p>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label class="form-label" for="member_type">Daftar Sebagai</label>
                                            <select class="form-select" aria-label="Default select example" id="member_type" name="member_type">
                                                @if($member === 'Distributors')
                                                <option selected  value="Distributors">Distributors</option>
                                                <option value="Stokist">Stokist</option>
                                                <option value="Agent">Agent</option>
                                                <option value="Mini Agent">Mini Agent</option>
                                                <option value="Dropship">Dropship</option>
                                                @elseif($member === 'Stokist')
                                                <option selected value="Stokist">Stokist</option>
                                                <option value="Agent">Agent</option>
                                                <option value="Mini Agent">Mini Agent</option>
                                                <option value="Dropship">Dropship</option>
                                                @elseif($member === 'Agent')
                                                <option selected value="Agent">Agent</option>
                                                <option value="Mini Agent">Mini Agent</option>
                                                <option value="Dropship">Dropship</option>
                                                @else
                                                <option selected value="Dropship">Dropship</option>
                                                @endif
                                            </select>
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
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>
                            </div>
                            <!--Bank Details -->
                        </form>

					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="{{asset('dashboard/static/js/app.js')}}"></script>
</body>
</html>
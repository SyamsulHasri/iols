@extends('layout.main')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section2 shop-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>Fresh and Organic</p> -->
						<h1>Maklumat Pembayaran</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- cart -->
	<div class="cart-section mt-100 mb-150">
		<div class="container">

            <div class="row">
                <div class="col-8">
                        <div>
                            <!-- Member Details -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h3 class="card-title font-weight-bold">Maklumat Peribadi</h3>
                                    </div>
                                    <div class="card-body">
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
                                    </div>
                                </div>
                            </div>
                            <!-- Member Details -->
                        </div>
                        <hr>
                        <div>
                            <!-- Shipping Address -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h3 class="card-title font-weight-bold">Alamat Penghantaran</h3>
                                        <h6 class="card-subtitle text-dark">Sila pastikan alamat yang diisi adalah betul dan alamat terkini, bagi memudahkan proses penghantaran produk.</h6>
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
                            <div class="mt-5 text-center">
                                <button type="button" class="btn btn-success btn-lg "> <i class="fas fa-cash-register"></i> Bayar Sekarang</button>
                            </div>
                        </div>
                </div>

                <div class="col-4">
                    <!-- <div class="table-responsive"> -->
                        <table id="cart" class="table table-hover table-bordered">
                            <thead>
                                <tr class="table-primary">
                                    <th >Produk</th>
                                    <th >Kuantiti</th>
                                    <th  class="text-center">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <tr data-id="{{ $id }}">
                                            <td data-th="Product">
                                                <div class="row">
                                                    <!-- <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div> -->
                                                    <div class="col-sm-9">
                                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Quantity">
                                                <h6>{{ $details['quantity'] }}</h6>
                                            </td>
                                            <td data-th="Subtotal" class="text-center">
                                                <h6>RM{{ $details['price'] * $details['quantity'] }}</h6>    
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" class="text-right"><h3><strong>Total RM{{ $total }}</strong></h3></td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">
                                        <a href="{{ url('/shop/shop') }}" class="btn btn-warning"><i class="fas fa-shopping-cart" ></i>Teruskan Membeli</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    <!-- </div> -->
                </div>
            </div>


        </div>            
    </div>



@endsection

@section('javascript')
<script type="text/javascript">

</script>
@endsection


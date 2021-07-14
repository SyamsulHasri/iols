@extends('dashboard.layout.main')

@section('content')

	<div class="row mb-2 mb-xl-3">
		<div class="col-auto d-none d-sm-block">
			<h3>Pembelian <strong>Produk</strong></h3>
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

    <div class="row">
        <div class="col-12 col-md-5 col-lg-5 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Senarai Produk</h5>
                </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Tambah ke troli</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <img src="{{asset('theme/img/products/iols-oils.jpg')}}" width="48" height="48" class="rounded-circle mr-2" alt="Avatar"> {{$product->name}}
                                </td>
                                <td>{{$product->price_level->price}}</td>
                                <td class="text-center"><a role="button" href="{{ route('system.add.to.cart', $product->id) }}" class="btn btn-primary"><i class="fas fa-cart-plus mr-1"></i> Tambah</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-7 col-xl-7">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Troli {{$user->name}}</h5>
                </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="50%">Produk</th>
                                <th width="10%">Harga</th>
                                <th width="20%">Kuantiti</th>
                                <th width="10%" class="text-center">Jumlah</th>
                                <th width="10%"> Padam </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @if(session('systemcart'))
                                @foreach(session('systemcart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr data-id="{{ $id }}">
                                        <td data-th="Product">
                                            <h5 class="nomargin">{{ $details['name'] }}</h5>
                                        </td>
                                        <td data-th="Price">RM{{ $details['price'] }}</td>
                                        <td data-th="Quantity">
                                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center">RM{{ $details['price'] * $details['quantity'] }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-md remove-from-cart"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tbody>
                                <tr class="table-info">
                                    <td colspan="5" class="text-right"><h3><strong>Jumlah : RM{{ $total }}</strong></h3></td>
                                </tr>
                                <tr class="table-secondary">
                                    <td colspan="5" class="text-right">
                                        <a href="#" class="btn btn-lg btn-success">Bayar Sekarang</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

<!-- BEGIN danger modal -->
<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#defaultModalDanger">
Danger
</button>
<div class="modal fade" id="defaultModalDanger" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Default modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
            </div>
            <div class="modal-body m-3">
                <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<!-- END danger modal -->
@endsection

@section('javascript')

<script type="text/javascript">
   
    $(".update-cart").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('system.update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Adakah anda pasti mahu memadamkan produk ini?")) {
            $.ajax({
                url: '{{ route('system.remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
	}, 2000);
   
</script>
@endsection
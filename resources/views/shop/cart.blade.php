@extends('layout.main')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section2 shop-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>Fresh and Organic</p> -->
						<h1>Troli Anda</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">

        @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div> 
        @endif
        
            <div class="table-responsive">

            </div>
            <table id="cart" class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th >Produk</th>
                        <th >Harga</th>
                        <th >Kuantiti</th>
                        <th  class="text-center">Jumlah</th>
                        <th > Padam </th>
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
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-right"><h3><strong>Total RM{{ $total }}</strong></h3></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">
                            <a href="{{ url('/shop/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Teruskan Membeli</a>
                            <button class="btn btn-success">Bayar Sekrang</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>



@endsection

@section('javascript')

<script type="text/javascript">
   
    $(".update-cart").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update.cart') }}',
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
   
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
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
   
</script>
@endsection


@extends('layout.main')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section shop-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>Fresh and Organic</p> -->
						<h1>Beli Sekarang</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">


			<div class="row product-lists">
				<div class="col-lg-6 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset('theme/img/products/iols-oils.jpg')}}" alt=""></a>
						</div>
						<h3>C-Buckthorn Oil</h3>
						<p class="product-price"><span>General Health Suppliment with omega 3 </span>RM 175.00 </p>
						<a href="{{ route('add.to.cart', 1) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i>Tambah ke troli</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset('theme/img/products/iols-makeup.jpg')}}" alt=""></a>
						</div>
						<h3>Fair Lady Skincare Set</h3>
						<p class="product-price"><span>4 in 1 FAIR LADY (BAKUCHIOL SERIES)</span>RM 155.00 </p>
						<a href="{{ route('add.to.cart', 2) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i>Tambah ke troli</a>
					</div>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end products -->

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


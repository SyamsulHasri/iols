
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
	<main class="d-flex w-100 h-100 bg-secondary text-white">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center">
							<h1 class="h2">
                <a href="/">
                  <img src="{{asset('theme/img/logo-1.png')}}" alt="">
                </a>
            </h1>
							<p class="lead font-weight-bold">
							  Log masuk ke akaun anda untuk meneruskan
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
								<form action="{{ route('login.post') }}" method="POST">
                          			@csrf
									  	@if (session('success'))
										<div class="alert alert-danger alert-dismissible" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<div class="alert-message">
												<strong>{{ session('success') }}</strong>
											</div>
										</div>
										@endif
										<div class="mb-3">
											<label class="form-label text-dark">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan emel anda" />
										</div>
										<div class="mb-3">
											<label class="form-label text-dark">Kata Laluan</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan kata laluan anda" />
											<small>
												<a href="#">Lupa Kata Laluan?</a>
											</small>
										</div>
										<div>
											<!-- <label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													Remember me next time
												</span>
											</label> -->
										</div>
										<div class="text-center mt-3">
											<!-- <a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
											<button type="submit" class="btn btn-lg btn-primary">Daftar Masuk</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="{{asset('dashboard/static/js/app.js')}}"></script>
</body>
</html>
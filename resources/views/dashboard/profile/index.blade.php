@extends('dashboard.layout.main')

@section('content')

	<div class="row mb-2 mb-xl-3">
		<div class="col-auto d-none d-sm-block">
			<h3>Profil <strong>{{auth()->user()->name}}</strong></h3>
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

    <h1 class="h3 mb-3">Tetapan</h1>

        <div class="row">
            <div class="col-md-3 col-xl-2">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tetapan Profil</h5>
                    </div>

                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                            Akaun
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#address" role="tab">
                            Alamat 
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                            Kata Laluan
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#bank" role="tab">
                            Maklumat Bank
                        </a>

                    </div>
                </div>
            </div>

                <div class="col-md-9 col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account" role="tabpanel">

                            <!-- <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Public info</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputUsername">Username</label>
                                                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputUsername">Biography</label>
                                                    <textarea rows="2" class="form-control" id="inputBio" placeholder="Tell something about yourself"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <img alt="Charles Hall" src="img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                                    <div class="mt-2">
                                                        <span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
                                                    </div>
                                                    <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>

                                </div>
                            </div> -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Maklumat Peribadi</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputEmail4">Nama</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputAddress">Nombor Telefon</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="address" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordCurrent">Current password</label>
                                            <input type="password" class="form-control" id="inputPasswordCurrent">
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew">New password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew2">Verify password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew2">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="password" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Password</h5>
                                </div>
                                <div class="card-body">

                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordCurrent">Current password</label>
                                            <input type="password" class="form-control" id="inputPasswordCurrent">
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew">New password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew2">Verify password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew2">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="bank" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Maklumat Bank</h5>
                                </div>
                                <div class="card-body">

                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordCurrent">Current password</label>
                                            <input type="password" class="form-control" id="inputPasswordCurrent">
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew">New password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew2">Verify password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew2">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



@endsection

@section('javascript')

@endsection
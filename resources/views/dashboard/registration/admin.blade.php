@extends('dashboard.layout.main')

@section('content')

	<div class="row mb-2 mb-xl-3">
		<div class="col-auto d-none d-sm-block">
			<h3>Senarai <strong>Pentadbir</strong> </h3>
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

    <!-- Success message -->
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert-icon">
            <i class="far fa-fw fa-bell"></i>
        </div>
        <div class="alert-message">
            <strong>{{Session::get('success')}}</strong>
        </div>
    </div>

    @endif

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                    <a href="{{route('admin.register')}}" type="button" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Tambah Pentadbir</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nombor Telefon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin )
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->phone_no}}</td>
                            <td>{{$admin->email}}</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
					
@endsection
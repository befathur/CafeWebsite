<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/dashboard.css') }}" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="nav col-md-2">
				<nav class="navbar p-5 pt-3 pb-3">
					<a class="navbar-brand" href="#">
					<img src="../../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
						<span class="title">Cafe Stocks</span>
					</a>
				</nav>
			</div>
			<div class="col-md-10 p-5 pt-3 pb-3 nav-right">
				<h4>Store Overview</h4>
			</div>
			<div class="col-md-2 col-left p-5">
				<div class="menu">
					<a href="/dashboard">
						<div class="mb-3">
							<span>Utama</span>
						</div>
					</a>
					<a href="/produk">
						<div class="mb-3">
							<span>Produk</span>
						</div>
					</a>
					<a href="/supplier">
						<div class="menu-active mb-3">
							<span>Supplier</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-10 col-right p-5 pt-5 pb-3">
				<a href="/dashboard"><span>< Kembali</span></a>
				<p class="title mt-3">Tambah Supplier</p>
				@if($errors)
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				@endif
				<div class="row">
					<div class="col-md-4">
						<form action="\supplier" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label for="kode" class="form-label">Kode Supplier</label>
								<input type="text" name="kode_supplier" class="form-control">
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">Nama Supplier</label>
								<input type="text" name="nama_supplier" class="form-control">
							</div>
							<div class="mb-3">
								<label for="alamat" class="form-label">Alamat</label>
								<textarea class="form-control" rows="2" name="alamat"></textarea>
							</div>
							<div class="mb-3">
								<label for="no-telp" class="form-label">No. telp</label>
								<input type="number" name="no_telp" class="form-control" min="0" name="no_telp">
							</div>
							<div class="mb-3">
								<label for="deskripsi" class="form-label">Deskripsi</label>
								<textarea class="form-control" rows="2" name="deskripsi"></textarea>
							</div>
							<div class="mb-4 mt-4" style="text-align: right;">
								<button type="submit">Tambah Supplier</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
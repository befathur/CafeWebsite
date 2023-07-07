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
						<div class="menu-active mb-3">
							<span>Produk</span>
						</div>
					</a>
					<a href="/supplier">
						<div class="mb-3">
							<span>Supplier</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-10 col-right p-5 pt-5 pb-3">
				<a href="/dashboard"><span>< Kembali</span></a>
				<p class="title mt-3">Tambah Produk</p>
				@if($errors)
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				@endif
				<form action="\produk" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-4">
							<div class="mb-3">
								<label for="kode" class="form-label">Kode Produk</label>
								<input type="text" name="kode_produk" class="form-control">
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">Nama Produk</label>
								<input type="text" name="nama_produk" class="form-control">
							</div>
							<div class="mb-3">
								<label for="kategori" class="form-label">Kategori Produk</label><br />
								<input type="text" name="kategori" class="form-control">
							</div>
							<div class="mb-3">
								<label for="stok" class="form-label">Stok</label>
								<input type="number" name="stok" class="form-control form-stok" min="0">
							</div>
							<div class="mb-3">
								<label for="tanggal-beli" class="form-label">Tanggal Beli</label>
								<input type="date" name="tgl_beli" class="form-control">
							</div>
							<div class="mb-3">
								<label for="tanggal-beli" class="form-label">Tanggal Kadaluwarsa</label>
								<input type="date" name="tgl_kadaluwarsa" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label for="supplier" class="form-label">Supplier</label><br />
								<input type="text" name="supplier" class="form-control">
							</div>
							<div class="mb-3">
								<label for="gambar" class="form-label">Gambar Produk</label>
								<input type="file" name="foto" class="form-control">
							</div>
							<div class="mb-3">
								<label for="deskripsi" class="form-label">Deskripsi Produk</label>
								<textarea class="form-control" rows="9" name="deskripsi"></textarea>
							</div>
							<div class="mb-4 mt-4" style="text-align: right;">
								<button type="submit">Tambah Produk</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
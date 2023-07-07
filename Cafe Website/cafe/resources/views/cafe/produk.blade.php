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
				<div class="col-md-12 col-stok">
					<div class="row mb-3">
						<div class="col-10">
							<p class="title">Produk</p>
						</div>
						<div class="col-2" style="text-align: right;">
							<a href="/formproduk"><button>Tambah Produk</button></a>
						</div>
					</div>
					<table class=" table table-hover table-striped">
						<thead style="background: #594545; color: white;">
							<tr>
								<th>No</th>
								<th>Kode Produk</th>
								<th>Nama Produk</th>
								<th>Kategori</th>
								<th>Deskripsi</th>
								<th>Stok</th>
								<th>Tanggal Beli</th>
								<th>Tanggal Kadaluwarsa</th>
								<th>Supplier</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="tbody">
							@foreach($products as $index => $product)
							<tr>
								<td>{{$index +1}}</td>
								<td>{{$product->kode_produk}}</td>
								<td>{{$product->nama_produk}}</td>
								<td>{{$product->kategori}}</td>
								<td>{{$product->deskripsi}}</td>
								<td>{{$product->stok}}</td>
								<td>{{$product->tgl_beli}}</td>
								<td>{{$product->tgl_kadaluwarsa}}</td>
								<td>{{$product->supplier}}</td>
								<td><img class="produk-img1" src="{{asset('storage/'.$product->foto)}}"></td>
								<td>
									<a href="/produk/{{$product->id}}/edit"><button class="mb-3">Edit</button></a>
									<form action="/produk/{{$product->id}}" method="POST">
										@method('DELETE')
										@csrf
										<button type="submit">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
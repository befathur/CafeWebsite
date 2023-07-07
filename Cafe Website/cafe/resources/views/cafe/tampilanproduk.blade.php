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
<style type="text/css">
	.stok-number {
		min-height: 40px;
		max-width: 80px;
		text-align: center;
		border: 0px;
		border-radius: 5px;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="nav col-md-2 nav-left">
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
						<div class="menu-active mb-3">
							<span>Utama</span>
						</div>
					</a>
					<a href="/produk">
						<div class="mb-3">
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
				<div class="row">
					<div class="col-md-12 row col-stok">
						<a href="/dashboard"><span>< Kembali</span></a>
						<span class="title mt-3">{{$product -> id}} - {{$product -> nama_produk}}</span>
						<span class="subtitle mb-4">Tgl Kedaluwarsa: {{$product -> tgl_kadaluwarsa}}</span>
						<div class="col-md-4 text-center">
							<img class="produk-img2" src="{{asset('storage/'.$product->foto)}}"><br />
							<form action="/dashboard/{{$product->id}}" method="POST">
								@method('PUT')
								@csrf
								<div class="btn-number mt-4">
									<button id="minus">−</button>
									<input type="text" value="{{$product -> stok}}" id="input" name="stok" class="stok-number" onkeypress="return /[0-9]/i.test(event.key)">
									<button id="plus">+</button>
								</div>
								<div class="mb-4 mt-4">
									<button type="submit">Konfirmasi Stok</button>
								</div>
							</form>
						</div>
						<div class="col-md-8 subtitle" style="text-align: l;">
							<p><b>Nama Produk :</b> {{$product -> nama_produk}}</p>
							<p><b>Kategori :</b> {{$product -> kategori}}</p>
							<p><b>Stok : </b> {{$product -> stok}}</p>
							<p><b>Tanggal beli : </b> {{$product -> tgl_beli}}</p>
							<p><b>Supplier : </b> {{$product -> supplier}}</p>
							<p><b>Deskripsi : </b><p>{{$product->deskripsi}}</p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	const minusButton = document.getElementById('minus');
	const plusButton = document.getElementById('plus');
	const inputField = document.getElementById('input');
	
	minusButton.addEventListener('click', event => {
		event.preventDefault();
		const currentValue = Number(inputField.value) || 0;
		if(currentValue - 1 < 0) {
			return;
		}
		if(currentValue == 0) {
			return;
		}
		inputField.value = currentValue - 1;
	});

	plusButton.addEventListener('click', event => {
		event.preventDefault();
		const currentValue = Number(inputField.value) || 0;
		inputField.value = currentValue + 1;
	});
</script>
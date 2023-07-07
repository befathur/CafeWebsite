<h1>Add New Product</h1>

@if($errors)
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif

<a href="/products">< Back to Product List</a>
<form action="\products" method="POST" enctype="multipart/form-data">
	@csrf
	Nama Produk: <input type="text" name="nama_produk"><br>
	Kategori: <input type="text" name="kategori"><br>
	Deskripsi: <textarea name="deskripsi"></textarea><br>
	Stok: <input type="number" name="stok"><br>
	Tanggal Beli: <input type="date" name="tgl_beli"><br>
	Tanggal Kadaluwarsa: <input type="date" name="tgl_kadaluwarsa"><br>
	Supplier: <input type="text" name="supplier"><br>
	Foto: <input type="file" name="foto"><br><br>
	<button type="submit">Submit</button>
</form>
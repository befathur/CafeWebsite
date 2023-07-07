<h1>Edit Student</h1>
<a href="/products">< Back to Product List</a>
<form action="\products\{{$product->id}}" method="POST">
	@method('PUT')
	@csrf
	Nama Produk: <input type="text" name="nama_produk" value="{{$product->nama_produk}}"><br>
	Kategori: <input type="text" name="kategori" value="{{$product->kategori}}"><br>
	Deskripsi: <textarea name="deskripsi">{{$product->deskripsi}}</textarea><br>
	Stok: <input type="number" name="stok" value="{{$product->stok}}"><br>
	Tanggal Beli: <input type="date" name="tgl_beli" value="{{$product->tgl_beli}}"><br>
	Tanggal Kadaluwarsa: <input type="date" name="tgl_kadaluwarsa" value="{{$product->tgl_kadaluwarsa}}"><br>
	Supplier: <input type="text" name="supplier" value="{{$product->supplier}}"><br>
	<button type="submit">Submit</button>
</form>
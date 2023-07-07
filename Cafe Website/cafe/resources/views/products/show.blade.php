<h1>{{$product->nama}}</h1>
<a href="/products">< Back to Product List</a>
<br>
Kode Produk: {{$product->kode_produk}}<br>
Nama Produk: {{$product->nama_produk}}<br>
Kategori: {{$product->kategori}}<br>
Deskripsi: {{$product->deskripsi}}<br>
Stok: {{$product->stok}}<br>
Tanggal Beli: {{$product->tgl_beli}}<br>
Tanggal Kadaluwarsa: {{$product->tgl_kadaluwarsa}}<br>
Supplier: {{$product->supplier}}<br>
Photo:	<br><img src="{{asset('storage/'.$product->foto)}}" width="300">
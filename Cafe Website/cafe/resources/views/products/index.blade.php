<h1>Daftar Mahasiswa</h1>
<a href="/products/create">Create new Products</a>
<table border="1">
	<tr>
		<th>Nama Produk</th>
		<th>Kategori</th>
		<th>Deskripsi</th>
		<th>Stok</th>
		<th>Tanggal Beli</th>
		<th>Tanggal Kadaluwarsa</th>
		<th>Supplier</th>
		<th>Foto</th>
	</tr>
	@foreach($products as $product)
	<tr>
		<td>{{$product->nama_produk}}</td>
		<td>{{$product->kategori}}</td>
		<td>{{$product->deskripsi}}</td>
		<td>{{$product->stok}}</td>
		<td>{{$product->tgl_beli}}</td>
		<td>{{$product->tgl_kadaluwarsa}}</td>
		<td>{{$product->supplier}}</td>
		<td><img src="{{asset('storage/'.$product->foto)}}" width="300"></td>
		<td>
			<a href="/products/{{$product->id}}">Show</a> |
			<a href="/products/{{$product->id}}/edit">Edit</a> |
			<form action="/products/{{$product->id}}" method="POST">
				@method('DELETE')
				@csrf
				<button type="submit">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
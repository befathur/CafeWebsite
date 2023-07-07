<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // return view('products.index', ['products' => $products]);
        return view('cafe.produk', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('products.create');
        return view('cafe.formproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'tgl_beli' => 'required',
            'tgl_kadaluwarsa' => 'required',
            'supplier' => 'required'
        ]);

        $path = $request->file('foto')->storePublicly('fotos', 'public');

        $product = new Product();
        $product->kode_produk = $request->kode_produk;
        $product->nama_produk = $request->nama_produk;
        $product->kategori = $request->kategori;
        $product->foto = $path;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->tgl_beli = $request->tgl_beli;
        $product->tgl_kadaluwarsa = $request->tgl_kadaluwarsa;
        $product->supplier = $request->supplier;
        $product->save();

        // return redirect('/products');
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        // return view('products.edit', ['product' => $product]);
        return view('cafe.formeditproduk', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->kode_produk = $request->kode_produk;
        $product->nama_produk = $request->nama_produk;
        $product->kategori = $request->kategori;
        if($request->foto != NULL){
            $path = $request->file('foto')->storePublicly('fotos', 'public');
            $product->foto = $path;
        }else{
            $product->foto = $request->fotos;
        }
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->tgl_beli = $request->tgl_beli;
        $product->tgl_kadaluwarsa = $request->tgl_kadaluwarsa;
        $product->supplier = $request->supplier;
        $product->save();

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/produk');
    }
}

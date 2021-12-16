<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
    function index(){
        // $id_user = request()->user()->id;
        $user = request()->user();
        // $data['list_produk'] = Produk::where('id_user', $id_user)->get();
        $data['list_produk'] = $user->produk;
        return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');
    }
    function store(){
        $produk = new Produk;
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data berhasil ditambahkan');
    }
    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }
    function edit(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }
    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data berhasil diedit');
    }
    function destroy(Produk $produk){
        $produk->delete();

        return redirect('admin/produk')->with('danger', 'Data berhasil dihapus');
    }
    function filter(){
        $nama = request('nama');
        $stok = explode(',', request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        // $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::whereNull('stok')->get();
        $data['list_produk'] = Produk::whereNotNull('stok')->get();
        // $data['list_produk'] = Produk::whereDate('created_at', '2021-11-09')->get();
        // $data['list_produk'] = Produk::whereYear('created_at', '2021')->get();
        // $data['list_produk'] = Produk::whereMonth('created_at', '11')->get();
        // $data['list_produk'] = Produk::whereTime('created_at', '20:00:28')->get();
        // $data['list_produk'] = Produk::whereDate('created_at', ['2021-11-08', '2021-11-09'])->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [5000])->whereYear('created_at', '2021')->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');

        return view('produk.index', $data);
    }
}
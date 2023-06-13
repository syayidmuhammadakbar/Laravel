<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\kategoriProduk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produk = new produk();
        return view('admin.produk.produk', ['produk' => $produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = kategoriProduk::all();
        $produk = produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //buat instance baru dengan modul produk
        // ambil data dari form dengan paramerter request dari uniq name
        // simpan data yang sudah diambil kedalam kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        // ketika selasai klik button simpan, kembalikan ke tampilan produk
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->name = $request->name;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();

        return redirect()->route('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

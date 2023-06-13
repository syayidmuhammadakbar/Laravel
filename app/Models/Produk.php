<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',

    ];
    // public function kategori_produk_id()
    // {
    //     return $this->belongsTo(kategoriProduk::class);
    // }
    // public function pesanan()
    // {
    //     return $this->hasMany(pesanan::class);
    // }
    public function getALLData()
    {
        $alldata = DB::table('produk')
            ->join('kategori_Produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $alldata;
    }
}

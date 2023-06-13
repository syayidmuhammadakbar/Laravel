<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';
    protected $fillable = [
        'nama',
    ];
    // public function produk()
    // {
    //     return $this->hasMany(produk::class);
    // }

    public function getALLData()
    {
        $alldata = DB::table('kategori_produk')
            ->select('kategori_produk.*')
            ->get();
        return $alldata;
    }
}

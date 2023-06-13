<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'nama_pesanan',
        'alamat_pesanan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id',
    ];
    // public function produk_id()
    // {

    //     return $this->belongsTo(produk::class);
    // }

    public function getALLData()
    {
        $alldata = DB::table('pesanan')
            ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
            ->select('pesanan. *', 'produk.nama',)
            ->get();
        return $alldata;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    //hubungan dari Pesanan ke Pengguna
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    //hubungan dari Pesanan ke Barang
    public function Barang()
    {
        return $this->belongsTo(Barang::class);
    }
    //hubungan dari Pesanan ke PesananDetail
    public function PesananDetail()
    {
        return $this->belongsTo(PesananDetail::class);
    }

}

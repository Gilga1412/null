<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    //hubungan dari PesananDetail ke Pesanan
    public function Pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}

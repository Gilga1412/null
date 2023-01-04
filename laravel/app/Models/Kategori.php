<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    //hubungan dari Kategori ke Barang
    public function Barang()
    {
        return $this->hasMany(Barang::class);
    }
}

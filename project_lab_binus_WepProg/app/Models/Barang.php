<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
//hubungan dari Barang ke Kategori
    public function kategori()
    {
        return $this->belongsTo(category::class);
    }
}

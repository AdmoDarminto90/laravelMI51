<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Masuk extends Model
{
    use HasFactory;
    public function Barang(){
        return $this->belongsTo(Barang::class, 'Barang');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori');
    }

    public function transaksiDetils(){
        return $this->hasMany('App\Models\TransaksiDetil');
    }
}

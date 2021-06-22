<?php

namespace App\Model\Tiket;

use Illuminate\Database\Eloquent\Model;
use App\Model\Categori\Categori;

class Tiket extends Model
{
    //
    protected $guarded = []; 
    public function categori()
    {
        # code...
        return $this->belongsTo(Categori::class, 'id_kategori', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $fillable = ['nama_genre'];
    public $visible = ['nama_genre'];
    public $timestamps = true;

    //Membuat Relasi One To Many ke Model buku
    public function buku()
    {
        //data penulis bisa memiliki banyak data
        //dari Model Buku memalui fk 'id_penulis'
        return $this->belongsToMany(Buku::class, 'genre_buku','id_genre','id_buku');
    }
}   

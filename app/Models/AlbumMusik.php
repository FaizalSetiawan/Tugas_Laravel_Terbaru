<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumMusik extends Model
{
    use HasFactory;
    protected $fillable = ['id','judul','tahun','cover_album'];
}

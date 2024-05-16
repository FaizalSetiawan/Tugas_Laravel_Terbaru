<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    //kolom mana saja boleh
    protected $fillable = ['title','description','cover_url','trailer_url','viewer'];
    //kolom(field) mana saja yang boleh diperlihatkan
    protected $visible = ['title','description','cover_url','trailer_url','viewer'];
}

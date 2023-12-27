<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    use HasFactory;

    protected $table = 'kategori_blog';
    protected $guarded = [];

    public function daftar_blog()
    {
      return $this->hasMany('App\Models\Blog', 'kategori_id');
    }
}

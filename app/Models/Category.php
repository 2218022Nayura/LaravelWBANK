<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';  // Sesuaikan dengan nama primary key di tabel Anda
    public $incrementing = true;
    protected $fillable = ['jenis_kartu', 'kategori', 'deskripsi', 'harga'];
    public $timestamps = true;
}
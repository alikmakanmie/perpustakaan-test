<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book'; // Perbaikan nama tabel menjadi 'books'

    protected $fillable = [
        'judul',
        'penulis', 
        'penerbit',
        'tahun_terbit',
        'gambar',
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class,'book_categories');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name_category'];

    // protected $table = 'categories';

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_categories');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tages extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->belongsToMany(Book::class, 'regions_stores','tages_books', 'tages_id', 'books_id');
    }
}

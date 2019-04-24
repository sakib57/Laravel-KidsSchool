<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_name', 'author_name',  'category','book_class','description','file',
    ];
}

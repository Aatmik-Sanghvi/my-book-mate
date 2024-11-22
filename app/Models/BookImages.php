<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BookImages extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'book_images';

    protected $fillable = [
        'books_id',
        'image_path'
    ];
}

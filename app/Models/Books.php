<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'books';

    protected $fillable = [
        'user_id',
        'title',
        'authors',
        'isbn'
    ];

    public function bookImages(){
        return $this->hasMany(BookImages::class,'books_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

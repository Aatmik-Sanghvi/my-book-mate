<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BorrowedBookHistory extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'borrowed_book_histories';

    protected $fillable = [
        'request_to_user_id',
        'request_by_user_id',
        'request_message',
        'book_id',
    ];
}

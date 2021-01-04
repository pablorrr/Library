<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedBooks extends Model
{
    public $fillable = ['user_id','book_id','amount'];

    public function book(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Book::class, 'id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'id');
    }
}


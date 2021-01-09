<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable=['id','title','author'];

    public function borrowed_book()
    {
        return $this->belongsTo(BorrowedBooks::class,'id');
    }



}

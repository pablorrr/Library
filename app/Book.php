<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    public $fillable = ['id', 'title', 'author'];

    /**
     * @var mixed
     */


    public function borrowed_book()
    {
        return $this->belongsTo(BorrowedBooks::class, 'id');
    }


}

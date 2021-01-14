<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BorrowedBooks extends Model
{
    public $timestamps = false;
    public $fillable = ['user_id', 'book_id', 'amount'];

    public function books(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Book::class, 'id');
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
    //for testing purposes
    //  public static function myQuery(){
    // return  DB::table('borrowed_books')->select('book_id')->where('user_id', '=', '2')->get();
    //}
}


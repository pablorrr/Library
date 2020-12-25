<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowed extends Model
{
    public $fillable=['id_borrowed','id_borrower','id_book'];
}

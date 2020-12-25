<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turned extends Model
{
  public $fillable =['id','id_borrower','id_borrowed'];
}

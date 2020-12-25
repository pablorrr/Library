<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    //fillable umozliwia pobieranie danych z DB bez ograniczen
    public $fillable = ['id_borrower', 'imie', 'nazwisko'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cerbero\QueryFilters\FiltersRecords;

class Book extends Model
{
    use FiltersRecords;

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

<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 05.11.2020
 * Time: 17:52
 */

namespace App\QueryFilters;
use Cerbero\QueryFilters\QueryFilters;

class BookFilters extends QueryFilters
{
    public function title($phrase)
    {
        $this->query->where('title','like', '%' . $phrase . '%');
    }
}

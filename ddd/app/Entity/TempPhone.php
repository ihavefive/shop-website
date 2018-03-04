<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class TempPhone extends Model
{
    protected $table = 'temp_phones';
    protected $primaryKey = 'id';

    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $incrementing = true;

    protected $fillable = [
        'title',
        'description'
    ];
}

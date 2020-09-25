<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{   
    protected $primaryKey = 'idslider';
    protected $fillable = [
        'name',
        'anh'
    ];
}

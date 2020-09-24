<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table = 'categorys';
    protected $primaryKey = 'id_cate';
    protected $fillable = [
        'name_cate',
        'status',
        'icon'
    ];

    public function products() {
        return $this->belongsTo(Products::class,'id_product');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'ten',
        'gia',
        'so_luong',
        'img',
        'img1',
        'img2',
        'img3',
        'img4',
    ];

    public function categorys() {
        return $this->hasOne(Categorys::class,'id_product','id_cate');
    }
}

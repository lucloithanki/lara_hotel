<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_cate';
    protected $fillable = [ // chỉ có thể thay đổi giá trị cột đc khai báo ở đây
                    'name_cate',
                    'slug'
                    ]; 
    public function rooms() {
        return Room::belongsTo(Room::class,'id_cate');
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id_room';
    protected $fillable = [ // chỉ có thể thay đổi giá trị cột đc khai báo ở đây
                    'room_name',
                    'view'
                    ]; 
    public function mems() {
        return Mem::belongsTo(Mem::class,'id_room');
    }

    public function category() {
        return Category::hasMany(Category::class,'id_cate','id_room');
    }
}

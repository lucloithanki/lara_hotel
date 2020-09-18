<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemModel extends Model
{
    protected $table = 'mems';
    protected $primaryKey = 'id_mem';
    protected $fillable = [ // chỉ có thể thay đổi giá trị cột đc khai báo ở đây
                    'u_name',
                    'password',
                    'email',
                    'phone',
                    'address',
                    'birthday'
                    ]; 
    public function rooms() {
        return Room::hasOne(Room::class,'id_room','id_mem');
    }
}

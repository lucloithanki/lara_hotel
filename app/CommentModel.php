<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id_comment';
    protected $fillable = [ // chỉ có thể thay đổi giá trị cột đc khai báo ở đây
                    'title',
                    'content',
                    'id_mem'
                    ]; 
    public function rooms() {
        return Room::belongsTo(Room::class,'id_cate');
    }
}

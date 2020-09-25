<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id_comment';
    protected $fillable = [
        'noi_dung'
    ];

    public function members() {
        return $this->hasOne(Members::class,'id_member','id_comment');
    }
}

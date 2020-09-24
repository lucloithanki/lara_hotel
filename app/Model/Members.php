<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{   
    protected $table = 'members';
    protected $primaryKey = 'id_member';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'age',
        'avatar',
    ];

    public function comments() {
        return $this->belongsTo(Comments::class,'id_comment','id_product');
    }
}

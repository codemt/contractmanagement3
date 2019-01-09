<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{

    protected $table = 'expences';

    protected $fillable = [
        'expence','amount','remark','date','sub_type_id'
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }
    
}

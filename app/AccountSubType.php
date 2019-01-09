<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountSubType extends Model
{

    protected $table = 'account_sub_types';

    protected $fillable = [
        'name','account_type_id'
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }
    
}
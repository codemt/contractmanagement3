<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wages extends Model
{

    protected $table = 'wages';

    protected $fillable = [
        'labor_id','amount','date','payment_mode','site_name','remark','email','person_given'
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }

    public function labor()
    {
        return $this->belongsTo(Labor::class, 'labor_id');
    }

}

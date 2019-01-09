<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    protected $table = 'attendance';

    protected $fillable = [
        'labor_id','date','month','year','site_name','attendance_status'
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

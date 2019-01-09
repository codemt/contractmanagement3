<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{

    protected $table = 'labors';

    protected $fillable = [
        'first_name','middle_name','last_name','contact_no','alternate_contact_no','email','joining_date','address','designation','account_no','ifsc_code','pan_no'
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }

    public function attendance(){
    	return $this->hasMany(Attendance::class);
    }

}
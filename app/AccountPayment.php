<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountPayment extends Model
{
	
    protected $table = 'account_payments';

    protected $fillable = [
        'labor_id','Amount'
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }

}

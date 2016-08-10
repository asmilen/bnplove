<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountCurrency extends Model
{
    protected $fillable = [
        'account_id',
        'point',
        'coin'
    ];

    protected $dates = ['created_at', 'updated_at'];
}

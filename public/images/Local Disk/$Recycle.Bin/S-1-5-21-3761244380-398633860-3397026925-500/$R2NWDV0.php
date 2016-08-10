<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountRanking extends Model
{
    protected $fillable = [
        'account_id',
        'week_1_final_point',
        'week_2_final_point',
        'week_3_final_point',
        'week_4_final_point',
        'final_gp'
    ];
    
    public $timestamps = false;
    
}

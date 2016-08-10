<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountBet extends Model
{
    protected $fillable = [
        'match_id',
        'account_id',
        'bet_amount',
        'choose_team_win',
        'bet_history_id',
        'result_history_id'
    ];

    protected $dates = ['created_at', 'updated_at'];
}

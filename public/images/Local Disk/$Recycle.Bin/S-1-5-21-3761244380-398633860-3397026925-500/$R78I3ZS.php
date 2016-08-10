<?php namespace App\Http\Controllers;

use App\AccountBet;
use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\Team;
use Auth;
use Illuminate\Pagination;
use DB;
use Illuminate\Support\Facades\Session;

class HistoryController extends Controller
{   

    public function history()
    {
        $bets = AccountBet::paginate(10);
        return view('vendor.history')->with('bets', $bets);
    }

}

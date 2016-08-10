

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Http\Requests;
use DB;

class HallOfFameController extends Controller
{
    //
    public function index(Request $request)
    {
        $week = $request->input('week');
        $week_point = 'week_'. $week . '_final_point';

    	$data = DB::table('account_rankings')
            ->join('accounts', 'account_rankings.account_id', '=', 'accounts.id')
            ->orderBy($week_point,'DESC')
            ->select('accounts.uid', 'accounts.username', $week_point)
            ->take(40)->get();

        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($data);

        //Define how many items we want to be visible in each page
        $perPage = 10;

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage-1) * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
        $paginatedResults= new LengthAwarePaginator($currentPageResults, count($collection), $perPage);

        return view('halloffame', ['data' => $paginatedResults,'week' => $week ]);
    }
}

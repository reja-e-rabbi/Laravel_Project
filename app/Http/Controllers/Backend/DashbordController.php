<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashbordController extends Controller
{
    public function Index() {
        $dtat['meta_title'] = 'Dashbord';
        $query = DB::select('select sl,type,name,total_project,total_project_sammary,happy_clint,happy_clint_sammary from sitelog where sl = "sl12237" limit ?', [1]);
        //$sitelog = DB::select('select sl,type,name,total_project,total_project_sammary,happy_clint,happy_clint_sammary from sitelog where sl = "sl12231" limit ?', [1]);
        $data['clint'] = $query[0];
        //$data['sitelog'] = $sitelog[0];
        $update = DB::table('sitelog')->where('sl','sl12237')->update(['total_project'=> (int) $query[0]->total_project +1, 'happy_clint'=>(int) $query[0]->happy_clint + 1]);
        return view('Admin.DashbordIndex', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyPage;
use App\Program;
use DB;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showtop(Request $request)
    {
        $top= DB::table('likes')->select('idprg', DB::raw('count(*) as count'))->groupBy('idprg')->orderBy('count', 'desc')->get();
        return view('toplike')->with(['top' => $top, 'title' => 'Top Like Programs', 'description' => '', 'page' => 'home']);
        
    }
    
 
}

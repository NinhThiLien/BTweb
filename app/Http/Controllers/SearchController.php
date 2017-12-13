<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Program;
use DB;

class SearchController extends Controller
{
    //
    public function coachlist(Request $request){
        
        $coachs = DB::select( DB::raw("SELECT * FROM users WHERE coach = 1"));  

        $title = 'Search';
        $page = 'search';
        $description = 'Coach List';
        
        $data = compact('coachs', 'title', 'page', 'description');

        return view('coachlist', $data);
    }
    
}

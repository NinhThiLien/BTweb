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
        // $search1=$request->search;
        // $coachs = DB::table('users')->where('coach', 1)->whereRaw("MATCH (name) AGAINST (? IN BOOLEAN MODE)", [$search1])->get();
        // DB::statement("SELECT * FROM 'users' WHERE 'coach' = 1 AND 'name' MATCH");
        $coachs = DB::select( DB::raw("SELECT * FROM users WHERE coach = 1"));  

        $title = 'Search';
        $page = 'search';
        $description = 'Coach List';
        
        $data = compact('coachs', 'title', 'page', 'description');

        return view('coachlist', $data);
    }
    
}

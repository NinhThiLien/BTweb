<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Program;
use App\Participate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function program(Request $request) {
         
         $coachid  = addslashes($request->coachid) ;
     	$user1 = User::where('id', $coachid)->first();

    	
        
        $progs1 = Program::where('coachid', $coachid)->get();
        
        
        $title = 'Coach';
        $page = 'coach';
        $description = 'Joined Prorgams and Tutorial';
        
        $data = compact('progs1', 'user1', 'post', 'title', 'page', 'description');

        return view('coach', $data);
    }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyPage;
use App\Participate;
class MyPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function mypage() {
     	$user = Auth::user();
    	
        
        $progs = Participate::select('prgid')->where('userid', $user->id)->get();
        
        
        $title = 'My Page';
        $page = 'mypage';
        $description = 'Joined Prorgams and Tutorial';
        
        $data = compact('progs', 'post', 'title', 'page', 'description');

        return view('mypage', $data);
    }
 
}

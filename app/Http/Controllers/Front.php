<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests;

use App\User;
use App\Program;
use App\Batch;
use App\Action;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class Front extends Controller
{
    var $title;
    var $description;
    // public function __construct()
    // {
    //    $this->middleware('auth');
    // }

   
   
    public function contact_us() {
        return view('contact_us', array('title' => 'Welcome', 'description' => '', 'page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('title' => 'Welcome', 'description' => '', 'page' => '/'));
    }

    public function logout() {
        Auth::logout();
        return Redirect::away('login');
    }

    public function register()
    {
        if (Request::isMethod('post')) {

            User::create([
                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'username' => Request::get('username'),
                'password' => bcrypt(Request::get('password')),
                'customer' => Request::get('customer'),
                'coach' => Request::get('coach'),
                'bday' => Request::get('bday'),
                'adress' => Request::get('adress'),
                'weight' => Request::get('weight'),
                'job' => Request::get('job'),

            ]);
           
        }

        return Redirect::away('auth/login')->with('message', 'Registration Success');;
    }

    public function authenticate()
    {
        if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
            return redirect()->intended('blog');
        } else {
            return view('login', array('title' => 'Welcome', 'description' => '', 'page' => '/'));
        }
    }

    

}

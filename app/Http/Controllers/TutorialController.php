<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyPage;
use App\Program;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $weight = $request->get('weight');
        $age = $request->get('age');
        $height = $request->get('height');
        if (($age <= 40) && ($weight >= ($height - 90))) {
            $progs = Program::where('level', 3)->get();
            $level = 3;
        } elseif ($age > 50) {
            $progs = Program::where('level', 1)->get();
            $level = 1;
        } else {
            $progs = Program::where('level', 2)->get();
            $level = 2;
        }
        return view('tutorial')->with(['level' => $level, 'progs' => $progs, 'age' => $age, 'weight' => $weight, 'height' => $height, 'title' => 'Tutorial', 'description' => '', 'page' => 'home']);
        
    }
    
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyPage;
use App\Program;
use Auth;
use Illuminate\Support\Facades\DB;
use \Input as Input;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newpost()
    {
        $user = Auth::user();

        return view('newpost')->with(['user' => $user, 'title' => 'Tutorial', 'description' => '', 'page' => 'home']);
        ;
        
    }
    public function addpost(Request $rq){
        $nuser = Auth::user();
        // $nuserid = $rq->input('nuserid');
        $ntitle = $rq->input('ntitle');
        $content = $rq->input('content');
        $max = (DB::table('programs')->max('id'))+1;
         if(Input::hasFile('file')){
           
            echo 'Uploaded';
            $file = Input::file('file');
             $filename=$file->getClientOriginalName();
            $file->move('images/blog/', $file->getClientOriginalName());
            echo '';
        }
         if ((isset($nuser)) && isset($filename)){
                                             
            DB::table('programs')->insert(
                ['id' => $max, 'url' => $max, 'title' => $ntitle, 'content' => $content, 'idowner' => $nuser->id, 'coachid' => '1', 'image' => $filename]);
                            
            } else  DB::table('programs')->insert(
                ['id' => $max, 'url' => $max, 'title' => $ntitle, 'content' => $content, 'idowner' => $nuser->id, 'coachid' => '1']);
        return redirect('blog/'.$max);
    }
    
 
}

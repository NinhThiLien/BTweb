<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Program;
use App\Batch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function blog() {
        $progs = Program::where('id', '>', 0)->paginate(5);

        $progs->setPath('blog');
        $data['progs'] = $progs;

        return view('blog', array('data' => $data, 'title' => 'Latest Blog Programs', 'description' => '', 'page' => 'blog'));
    }

    public function blog_post($url, Request $request) {
        $nuserid = $request->get('nuserid');
        $nprogid = $request->get('nprogid');
        $like1 = $request->get('like1');
        $unlike1 = $request->get('unlike1');
        $ncmtid = $request->get('ncmtid');
        $like2 = $request->get('like2');
        $unlike2 = $request->get('unlike2');
        $join1 = $request->get('join1');
        $join2 = $request->get('join2');
        // $cmt = $request->get('cmt');
        // $content = $request->get('content');
        $prog = Program::whereUrl($url)->first();
        $tags = $prog->tags;
        $prev_url = Program::prevBlogPostUrl($prog->url);
        $next_url = Program::nextBlogPostUrl($prog->url);
        $title = $prog->title;
        $description = $prog->description;
        $page = 'blog';
        $prog = Program::find($prog->id);
        $batchs = Program::find($prog->id)->batchs;
        $actions = DB::table('actions')->select('id')->join('batchs', 'actions.id', '=', 'batchs.actid')->select('action.*')->where('batch.prg', $prog->id);
        // $actions = Program::find($prog->id)->actions;
        $coach = Program::find($prog->id)->coach;
        $action_date = Batch::select('date')->where('prgid', $prog->id)->distinct()->get();
        
            if (isset(Auth::user()->id)) $user = Auth::user();
            
            
      
       
        $data = compact('prev_url', 'next_url', 'tags', 'title', 'description', 'page', 'actions', 'batchs', 'coach', 'haha', 'prog', 'action_date', 'user', 'count');

        return view('blog_post', $data);
    }

    public function postregis(Request $rq) {
    // Lay thong tin POST
        $nuserid = $rq->input('nuserid');
        $nprogid = $rq->input('nprogid');
       
        if (isset(Auth::user()->id)) $user = Auth::user();

        if ((isset($nuserid)) && (Auth::user()->customer==1)){
                
                    $yes = DB::table('participate')->where('userid', $nuserid)->where('prgid', $nprogid)->first();
                                        
                    if (is_null($yes)){ 
                        DB::table('participate')->insert(
                            ['prgid' => $nprogid, 'userid' => $nuserid]
                        );
                   
                }
                // else DB::table('participate')->where('prgid', $nprogid)->where('userid', $nuserid)->delete();
            }
        
        // return redirect(url()->previous().'#cmt');
        return Redirect::to(URL::previous());
    }
    public function postreg(Request $rq) {
    // Lay thong tin POST
        $nuserid = $rq->input('nuserid');
        $nprogid = $rq->input('nprogid');
       
        if (isset(Auth::user()->id)) $user = Auth::user();

        if ((isset($nuserid)) && (Auth::user()->customer==1)){
                if (isset($join1) | isset($join2)){
                    $yes = DB::table('participate')->where('userid', $nuserid)->where('prgid', $nprogid)->first();
                                        
                    if (is_null($yes)){ 
                        DB::table('participate')->insert(
                            ['prgid' => $nprogid, 'userid' => $nuserid]
                        );
                    }
                }
                // else DB::table('participate')->where('prgid', $nprogid)->where('userid', $nuserid)->delete();
            }
        
        // return redirect(url()->previous().'#cmt');
        return Redirect::to(URL::previous());
    }

     public function postcmt(Request $rq) {
    // Lay thong tin POST
        $nuserid = $rq->input('nuserid');
        $nprogid = $rq->input('nprogid');
        $content = $rq->input('content');
        if (isset(Auth::user()->id)) $user = Auth::user();

        if ((isset($nuserid))){
                    // if (isset($cmt)){
                                             
                            DB::table('comments')->insert(
                                ['idprog' => $nprogid, 'iduser' => $nuserid, 'content' => $content]
                            );
                        // }
                    }
        
        // return redirect(url()->previous().'#cmt');
        return Redirect::to(URL::previous());
    }

     public function postlike1(Request $rq) {
    // Lay thong tin POST
        $nuserid = $rq->input('nuserid');
        $nprogid = $rq->input('nprogid');

        if (isset(Auth::user()->id)) $user = Auth::user();

         
                    $liked = DB::table('likes')->where('iduser', $nuserid)->where('idprg', $nprogid)->first();

                    if (is_null($liked)){ 
                        DB::table('likes')->insert(
                            ['idprg' => $nprogid, 'iduser' => $nuserid]
                        );
                    }
               
                 
                 
                    if (!is_null($liked)){ 
                        DB::table('likes')->where('idprg', $nprogid)->where('iduser', $nuserid)->delete();
                    }
                
        return Redirect::to(URL::previous());
    }

     public function postlike2(Request $rq) {
    // Lay thong tin POST
        $nuserid = $rq->input('nuserid');
        $nprogid = $rq->input('nprogid');
        $ncmtid = $rq->input('ncmtid');
         if (isset($ncmtid)){
                    $liked = DB::table('likes')->where('iduser', $nuserid)->where('idcmt', $ncmtid)->first();

                    if (is_null($liked)){ 
                        DB::table('likes')->insert(
                            ['idcmt' => $ncmtid, 'iduser' => $nuserid]
                        );
                    }
               
               
            
                    if (!is_null($liked)){ 
                        DB::table('likes')->where('idcmt', $ncmtid)->where('iduser', $nuserid)->delete();
                    }
                }
        return Redirect::to(URL::previous());
    }

}

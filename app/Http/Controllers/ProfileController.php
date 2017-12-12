<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use App\Participate;

class ProfileController extends Controller
{
    public function update(){
        //
        $user = Auth::user();
         $description = 'Update';
        $title = 'Update';
        $page = 'home';
        $progs = Participate::select('prgid')->where('userid', $user->id)->get();

        $data = compact('progs', 'user', 'title', 'page', 'description');
        if ($user)
        return view('update', $data);
    }

    public function postupdate(Request $request){
        //
        $this->validate($request,
            [
                'name'=>'required|min:3',
                'birthday'=>'date',
                'weight'=>'numeric'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên phải có ít nhất 3 kí tự',
                'birthday.date'=>'Birthday chưa đúng định dạng date',
                'weight.numeric'=>'weight phải là kiểu số'
            ]);
        $user = Auth::user();
        $user->name = $request->name;
        if($request->changepassword=="on"){
            $this->validate($request,[
                'password'=>'required|min:3|max:32',
                'repeatpassword'=>'required|same:password'
            ],[
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 3 kí tự',
                'password.max'=>'Mật khẩu tối đa 32 kí tự',
                'repeatpassword.required'=>'Bạn chưa nhập lại mật khẩu',
                'repeatpassword.same'=>'Mật khẩu không khớp'
            ]);
            $user->password = Hash::make($request->password);
        }
     
        $user->bday=$request->bday;
        $user->adress=$request->address;
        $user->weight=$request->weight;
        $user->job=$request->job;
        $user->username=$request->username;
        $user->save();
        return redirect()->back()->with('thongbao','Bạn đã update thành công');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyPage;
use App\Participate;

public function followUser(int $profileId)
{
  $user = User::find($profileId);
  if(! $user) {
    
     return redirect()->back()->with('error', 'User does not exist.'); 
 }

$user->followers()->sync(auth()->user()->id);
return redirect()->back()->with('success', 'Successfully followed the user.');
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    protected $table = 'participate';
    protected $fillable = array('id', 'userid', 'prgid');

    public function users(){
        return $this->belongTo('App\User', 'id', 'userid');
    }
    public function progs(){
        return $this->belongTo('App\Program', 'id', 'prgid');
    }
}

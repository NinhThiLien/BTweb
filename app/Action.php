<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
	protected $table = 'actions';
    protected $fillable = array('actid', 'name', 'content');

    public function users(){
        return $this->hasMany('App\Batch', 'actid');
    }
}

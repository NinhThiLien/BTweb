<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
	
    protected $table = 'batchs';

    protected $fillable = array('id', 'prgid', 'actid', 'date', 'start', 'end');

    

    public function prgid()
    {
    	return $this->belongsTo('App\Program', 'prgid', 'id');
    }

    public function actid(){
        return $this->belongsTo('App\Action', 'actid', 'actid');
    }

    
}

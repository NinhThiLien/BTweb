<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
	///////////////
	// old model //
	///////////////
    // protected $primaryKey = 'id';
    // protected $table = 'programs';
    // protected $fillable = array('url', 'title', 'description', 'content', 'blog', 'created_at_ip', 'updated_at_ip');

    ///////////////
    // new model //
    ///////////////
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

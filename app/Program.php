<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Program extends BaseModel
{
	
    protected $table = 'programs';
    
    protected $fillable = array('id', 'url', 'title', 'description', 'content', 'image', 'blog', 'category_id');

    public static function prevBlogPostUrl($id)
    {
    	$blog = static::where('id', '<', $id)->orderBy('id', 'desc')->first();
    	return $blog ? $blog->url : '#';
    }

    public static function nextBlogPostUrl($id)
    {
    	$blog = static::where('id', '>', $id)->orderBy('id', 'asc')->first();
    	return $blog ? $blog->url : '#';
    }

    
    public function participate(){
        return $this->hasMany('App\Participate', 'id', 'prgid');
    }
    public function coach()
    {
        return $this->hasOne('App\User', 'id', 'coachid');
    }
    public function batchs(){
        return $this->hasMany('App\Batch', 'prgid', 'id');
    }
    public function actions()
    {
        return $this->hasManyThrough('App\Action', 'App\Batch', 'sprgid', 'actid', 'id');
    }
}

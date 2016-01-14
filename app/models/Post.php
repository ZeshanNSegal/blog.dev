<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

    public static $rules = [
    	'title'      => 'required|max:100',
    	'body'       => 'required|max:10000'
    ];

    public function getCreatedAtAttribute ($value){
    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
    }

    public function setTitleAttribute($value){
    	$this->attribute['title'] = $value;
    	$this->attribute['slug'] = Str::slug($value);
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}

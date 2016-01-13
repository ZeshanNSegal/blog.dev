<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

    public static $rules = [
    	'title'      => 'required|max:100',
    	'body'       => 'required|max:10000'
    ];

}

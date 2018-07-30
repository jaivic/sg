<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class posts extends Model
{
    
    public $table = 'posts';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'user_id',
    'title',
    'slug',
    'body',
    'type',
    'image',
    'postback',
    'visits',
    'likes',
    'status'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function users()
{
return $this->hasOne("App\Http\Models\admin1\users","id","user_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function categories()
{
return $this->belongsToMany("App\Http\Models\admin1\categories","post_category","post_id","category_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function tags()
{
return $this->belongsToMany("App\Http\Models\admin1\\tags","post_tag","post_id","tag_id");
}
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class post_tag extends Model
{
    
    public $table = 'postTag';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'post_id',
    'tag_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function posts()
{
return $this->hasOne("App\Http\Models\admin1\posts","id","post_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function tags()
{
return $this->hasOne("App\Http\Models\admin1\tags","id","tag_id");
}
}

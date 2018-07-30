<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class comments extends Model
{
    
    public $table = 'comments';
    
    
    
    public $date = [  ];
    public $fillable = [
        
    'post_id',
    'user_id',
    'comment',
    'approved'
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
public function users()
{
return $this->hasOne("App\Http\Models\admin1\users","id","user_id");
}
}

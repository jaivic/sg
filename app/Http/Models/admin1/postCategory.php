<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class post_category extends Model
{
    
    public $table = 'postCategory';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'post_id',
    'category_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function categories()
{
return $this->hasOne("App\Http\Models\admin1\categories","id","category_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function posts()
{
return $this->hasOne("App\Http\Models\admin1\posts","id","post_id");
}
}

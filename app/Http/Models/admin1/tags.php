<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class tags extends Model
{
    
    public $table = 'tags';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function posts()
{
return $this->hasMany("App\Http\Models\admin1\posts","post_id","tag_id");
}
}

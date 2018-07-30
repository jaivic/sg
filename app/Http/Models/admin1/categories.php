<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class categories extends Model
{
    
    public $table = 'categories';
    
    
    
    public $date = [  ];
    public $fillable = [
        
    'name'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function posts()
{
return $this->hasMany("App\Http\Models\admin1\posts","post_id","category_id");
}
}

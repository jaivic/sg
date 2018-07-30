<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class permissions extends Model
{
    
    public $table = 'permissions';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'display_name',
    'description'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function roles()
{
return $this->belongsToMany("App\Http\Models\admin1\roles","permission_role","permission_id","role_id");
}
}

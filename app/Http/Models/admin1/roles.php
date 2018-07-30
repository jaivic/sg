<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class roles extends Model
{
    
    public $table = 'roles';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'display_name',
    'description'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function permissions()
{
return $this->hasMany("App\Http\Models\admin1\permissions","permission_id","role_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function users()
{
return $this->belongsToMany("App\Http\Models\admin1\users","role_user","role_id","user_id");
}
}

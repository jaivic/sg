<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class users extends Model
{
    
    public $table = 'users';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'email',
    'password',
    'github_account',
    'timezone',
    'remember_token',
    'slack_user_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function applications()
{
return $this->hasMany("App\Http\Models\admin1\applications","application_id","user_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function roles()
{
return $this->hasMany("App\Http\Models\admin1\roles","role_id","user_id");
}
}

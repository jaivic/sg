<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class role_user extends Model
{
    
    public $table = 'roleUser';
    public $timestamps = false;

    
    protected $primaryKey="user_id";
    public $date = [  ];
    public $fillable = [
        
    'user_id',
    'role_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function roles()
{
return $this->hasOne("App\Http\Models\admin1\roles","id","role_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function users()
{
return $this->hasOne("App\Http\Models\admin1\users","id","user_id");
}
}

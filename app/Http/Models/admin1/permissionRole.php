<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class permission_role extends Model
{
    
    public $table = 'permissionRole';
    public $timestamps = false;

    
    protected $primaryKey="permission_id";
    public $date = [  ];
    public $fillable = [
        
    'permission_id',
    'role_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function permissions()
{
return $this->hasOne("App\Http\Models\admin1\permissions","id","permission_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function roles()
{
return $this->hasOne("App\Http\Models\admin1\roles","id","role_id");
}
}

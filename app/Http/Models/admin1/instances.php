<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class instances extends Model
{
    
    public $table = 'instances';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'environment_id',
    'type',
    'name'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function environments()
{
return $this->hasOne("App\Http\Models\admin1\environments","id","environment_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function deployments()
{
return $this->hasMany("App\Http\Models\admin1\deployments","deployment_id","instance_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function t_instance_summaries()
{
return $this->belongsToMany("App\Http\Models\admin1\t_instance_summaries","deployment_instance_summaries","instance_id","t_instance_summaries_id");
}
}

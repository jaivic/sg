<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class auto_tests extends Model
{
    
    public $table = 'autoTests';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'auto_test_repo_id',
    'application_id',
    'environment_id',
    'user_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function autoTestRepos()
{
return $this->hasOne("App\Http\Models\admin1\autoTestRepos","id","auto_test_repo_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function detalles()
{
return $this->belongsToMany("App\Http\Models\admin1\detalles","auto_test_detalles","auto_test_id","detalles_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function repos()
{
return $this->belongsToMany("App\Http\Models\admin1\repos","auto_test_repos","auto_test_id","repos_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function tickets()
{
return $this->hasMany("App\Http\Models\admin1\tickets","ticket_id","auto_test_id");
}
}

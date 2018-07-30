<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class applications extends Model
{
    
    public $table = 'applications';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'aws_account_id',
    'repository',
    'deployment_type',
    'url',
    'sonar_key',
    'json_rules'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function users()
{
return $this->belongsToMany("App\Http\Models\admin1\users","application_user","application_id","user_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function backups()
{
return $this->hasMany("App\Http\Models\admin1\backups","backup_id","application_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function backup_details()
{
return $this->hasMany("App\Http\Models\admin1\backup_details","backup_detail_id","application_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function schedule_backups()
{
return $this->hasMany("App\Http\Models\admin1\schedule_backups","schedule_backup_id","application_id");
}
}

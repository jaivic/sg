<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class tickets extends Model
{
    
    public $table = 'tickets';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'user_id',
    'aproved_by',
    'application_id',
    'environment_id',
    'old_id',
    'type',
    'status',
    'scheduled_at',
    'executed_at',
    'description',
    'observation',
    'emergency_level'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function applications()
{
return $this->hasOne("App\Http\Models\admin1\applications","id","application_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function users()
{
return $this->hasOne("App\Http\Models\admin1\users","id","aproved_by");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function environments()
{
return $this->hasOne("App\Http\Models\admin1\environments","id","environment_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function ticketsUserIdForeign()
{
return $this->hasOne("App\Http\Models\admin1\ticketsUserIdForeign","id","user_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function file_config_catalogs()
{
return $this->hasMany("App\Http\Models\admin1\file_config_catalogs","file_config_catalog_id","ticket_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function mailing_lists()
{
return $this->hasMany("App\Http\Models\admin1\mailing_lists","mailing_list_id","ticket_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function auto_tests()
{
return $this->belongsToMany("App\Http\Models\admin1\auto_tests","ticket_auto_tests","ticket_id","auto_tests_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function backup_databases()
{
return $this->belongsToMany("App\Http\Models\admin1\backup_databases","ticket_backup_databases","ticket_id","backup_databases_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function details()
{
return $this->belongsToMany("App\Http\Models\admin1\details","ticket_details","ticket_id","details_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function details_tests()
{
return $this->belongsToMany("App\Http\Models\admin1\details_tests","ticket_details_tests","ticket_id","details_tests_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function restore_databases()
{
return $this->belongsToMany("App\Http\Models\admin1\restore_databases","ticket_restore_databases","ticket_id","restore_databases_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function sql_files()
{
return $this->belongsToMany("App\Http\Models\admin1\sql_files","ticket_sql_files","ticket_id","sql_files_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function statistics()
{
return $this->belongsToMany("App\Http\Models\admin1\statistics","ticket_statistics","ticket_id","statistics_id");
}
}

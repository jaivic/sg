<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backups extends Model
{
    
    public $table = 'backups';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'schedule_id',
    'instance_name',
    'backup_type',
    'status',
    'start_time',
    'completed_time',
    'origin',
    'log_error',
    'execution_time',
    'observations',
    'is_mirror',
    'mirror_instance',
    'ticket_id',
    'relanzar'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function scheduleBackups()
{
return $this->hasOne("App\Http\Models\admin1\scheduleBackups","id","schedule_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function applications()
{
return $this->belongsToMany("App\Http\Models\admin1\applications","backup_applications","backup_id","applications_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function detail_applications()
{
return $this->belongsToMany("App\Http\Models\admin1\detail_applications","backup_detail_applications","backup_id","detail_applications_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function details()
{
return $this->belongsToMany("App\Http\Models\admin1\details","backup_details","backup_id","details_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function reporte_politicas()
{
return $this->belongsToMany("App\Http\Models\admin1\reporte_politicas","backup_reporte_politicas","backup_id","reporte_politicas_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function schedules()
{
return $this->hasMany("App\Http\Models\admin1\schedules","schedule_id","backup_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function e_backup_applications()
{
return $this->belongsToMany("App\Http\Models\admin1\e_backup_applications","schedule_backup_applications","backup_id","e_backup_applications_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function hasManyschedules()
{
return $this->hasMany("App\Http\Models\admin1\hasManyschedules","schedule_id","backup_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function e_backup_databases()
{
return $this->belongsToMany("App\Http\Models\admin1\e_backup_databases","schedule_backup_databases","backup_id","e_backup_databases_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function hasManyschedules()
{
return $this->hasMany("App\Http\Models\admin1\hasManyschedules","schedule_id","backup_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function e_backup_folders()
{
return $this->belongsToMany("App\Http\Models\admin1\e_backup_folders","schedule_backup_folders","backup_id","e_backup_folders_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function hasManyschedules()
{
return $this->hasMany("App\Http\Models\admin1\hasManyschedules","schedule_id","backup_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function tickets()
{
return $this->hasMany("App\Http\Models\admin1\tickets","ticket_id","backup_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function backup_databases()
{
return $this->belongsToMany("App\Http\Models\admin1\backup_databases","ticket_backup_databases","backup_id","backup_databases_id");
}
}

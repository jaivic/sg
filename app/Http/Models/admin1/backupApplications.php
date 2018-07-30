<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backup_applications extends Model
{
    
    public $table = 'backupApplications';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'schedule_id',
    'instance_name',
    'start_time',
    'completed_time',
    'status',
    'origin',
    'error',
    'backup_type',
    'execution_time',
    'observations',
    'ticket_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function scheduleBackupApplications()
{
return $this->hasOne("App\Http\Models\admin1\scheduleBackupApplications","id","schedule_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function schedules()
{
return $this->hasMany("App\Http\Models\admin1\schedules","schedule_id","backup_application_id");
}
}

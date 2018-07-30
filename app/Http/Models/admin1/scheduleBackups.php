<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class schedule_backups extends Model
{
    
    public $table = 'scheduleBackups';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'instance_name',
    'instance_type',
    'instance_id',
    'lunes',
    'martes',
    'miercoles',
    'jueves',
    'viernes',
    'sabado',
    'domingo',
    'hora_programada',
    'status',
    'description',
    'mode',
    'is_mirror',
    'is_linea_base',
    'is_ansible',
    'domain',
    'mirror_instance',
    'mirror_instance_id',
    'forward_time',
    'aws_account_id'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function applications()
{
return $this->belongsToMany("App\Http\Models\admin1\applications","schedule_backup_applications","schedule_backup_id","applications_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function databases()
{
return $this->belongsToMany("App\Http\Models\admin1\databases","schedule_backup_databases","schedule_backup_id","databases_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function folders()
{
return $this->belongsToMany("App\Http\Models\admin1\folders","schedule_backup_folders","schedule_backup_id","folders_id");
}
}

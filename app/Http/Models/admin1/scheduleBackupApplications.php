<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class schedule_backup_applications extends Model
{
    
    public $table = 'scheduleBackupApplications';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'instance_name',
    'lunes',
    'martes',
    'miercoles',
    'jueves',
    'viernes',
    'sabado',
    'domingo',
    'hora_programada',
    'description',
    'status',
    'is_linea_base',
    'instance_type',
    'is_ansible',
    'aplicacion_id',
    'environment_id',
    'instancia_id',
    'domain',
    'forward_time',
    'aws_account_id'
    ];


    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class scheduleBackupApplications extends Model
{
    use SoftDeletes;
    public $table = 'schedule_backup_applications';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
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
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'instance_name' => 'string',
    'lunes' => 'boolean',
    'martes' => 'boolean',
    'miercoles' => 'boolean',
    'jueves' => 'boolean',
    'viernes' => 'boolean',
    'sabado' => 'boolean',
    'domingo' => 'boolean',
    ,
    'description' => 'string',
    'status' => 'boolean',
    'is_linea_base' => 'boolean',
    'instance_type' => 'string',
    'is_ansible' => 'boolean',
    'aplicacion_id' => 'integer',
    'environment_id' => 'integer',
    'instancia_id' => 'integer',
    'domain' => 'string',
    ,
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class scheduleBackups extends Model
{
    use SoftDeletes;
    public $table = 'schedule_backups';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
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
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'instance_name' => 'string',
    'instance_type' => 'string',
    'instance_id' => 'integer',
    'lunes' => 'boolean',
    'martes' => 'boolean',
    'miercoles' => 'boolean',
    'jueves' => 'boolean',
    'viernes' => 'boolean',
    'sabado' => 'boolean',
    'domingo' => 'boolean',
    ,
    'status' => 'boolean',
    'description' => 'string',
    'mode' => 'string',
    'is_mirror' => 'boolean',
    'is_linea_base' => 'boolean',
    'is_ansible' => 'boolean',
    'domain' => 'string',
    'mirror_instance' => 'string',
    'mirror_instance_id' => 'integer',
    ,
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

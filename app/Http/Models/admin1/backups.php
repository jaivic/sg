<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backups extends Model
{
    
    public $table = 'backups';
    public $timestamps = false;

    
    
    public $date = [ 
    'start_time',
    'completed_time' ];
    public $fillable = [
        
    'id',
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
    'created_at',
    'updated_at',
    'relanzar'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'schedule_id' => 'integer',
    'instance_name' => 'string',
    'backup_type' => 'string',
    'status' => 'string',
    'start_time' => 'datetime',
    'completed_time' => 'datetime',
    'origin' => 'string',
    'log_error' => 'string',
    ,
    'observations' => 'string',
    'is_mirror' => 'boolean',
    'mirror_instance' => 'string',
    'ticket_id' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'relanzar' => 'integer'
    ];

    
}

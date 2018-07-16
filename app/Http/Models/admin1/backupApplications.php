<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backupApplications extends Model
{
    
    public $table = 'backup_applications';
    public $timestamps = false;

    
    
    public $date = [ 
    'start_time',
    'completed_time' ];
    public $fillable = [
        
    'id',
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
    'ticket_id',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'schedule_id' => 'integer',
    'instance_name' => 'string',
    'start_time' => 'datetime',
    'completed_time' => 'datetime',
    'status' => 'string',
    'origin' => 'string',
    'error' => 'string',
    'backup_type' => 'string',
    ,
    'observations' => 'string',
    'ticket_id' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

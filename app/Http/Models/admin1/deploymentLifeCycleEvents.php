<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class deploymentLifeCycleEvents extends Model
{
    
    public $table = 'deployment_life_cycle_events';
    public $timestamps = false;

    
    
    public $date = [ 
    'start_time',
    'end_time' ];
    public $fillable = [
        
    'id',
    'deployment_instance_summary_id',
    'diagnostics_error_code',
    'diagnostics_log_tail',
    'diagnostics_message',
    'diagnostics_script_name',
    'lifecycle_event_name',
    'start_time',
    'end_time',
    'status',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'deployment_instance_summary_id' => 'integer',
    'diagnostics_error_code' => 'string',
    'diagnostics_log_tail' => 'string',
    'diagnostics_message' => 'string',
    'diagnostics_script_name' => 'string',
    'lifecycle_event_name' => 'string',
    'start_time' => 'datetime',
    'end_time' => 'datetime',
    'status' => 'boolean',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

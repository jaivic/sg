<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backupDetails extends Model
{
    
    public $table = 'backup_details';
    public $timestamps = false;

    
    
    public $date = [ 
    'start_time',
    'completed_time',
    'zip_start_time',
    'zip_completed_time',
    's3_start_time',
    's3_completed_time' ];
    public $fillable = [
        
    'id',
    'backup_id',
    'database_name',
    'status',
    'mode',
    'files',
    's3_path',
    'start_time',
    'completed_time',
    'duration',
    'log_error',
    'zip_start_time',
    'zip_completed_time',
    's3_start_time',
    's3_completed_time',
    'size_in_gb',
    'observations',
    'created_at',
    'updated_at',
    'relaunch',
    'relanzar'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'backup_id' => 'integer',
    'database_name' => 'string',
    'status' => 'string',
    'mode' => 'string',
    'files' => 'integer',
    's3_path' => 'string',
    'start_time' => 'datetime',
    'completed_time' => 'datetime',
    ,
    'log_error' => 'string',
    'zip_start_time' => 'datetime',
    'zip_completed_time' => 'datetime',
    's3_start_time' => 'datetime',
    's3_completed_time' => 'datetime',
    'size_in_gb' => 'bigint',
    'observations' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'relaunch' => 'integer',
    'relanzar' => 'integer'
    ];

    
}

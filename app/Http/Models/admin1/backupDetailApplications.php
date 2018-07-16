<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backupDetailApplications extends Model
{
    
    public $table = 'backup_detail_applications';
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
    'backup_application_id',
    'folder_name',
    'status',
    'mode',
    'size_in_gb',
    'files',
    's3_path',
    'start_time',
    'completed_time',
    'duration',
    'zip_start_time',
    'zip_completed_time',
    's3_start_time',
    's3_completed_time',
    'log_error',
    'observations',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'backup_application_id' => 'integer',
    'folder_name' => 'string',
    'status' => 'string',
    'mode' => 'string',
    'size_in_gb' => 'bigint',
    'files' => 'integer',
    's3_path' => 'string',
    'start_time' => 'datetime',
    'completed_time' => 'datetime',
    ,
    'zip_start_time' => 'datetime',
    'zip_completed_time' => 'datetime',
    's3_start_time' => 'datetime',
    's3_completed_time' => 'datetime',
    'log_error' => 'string',
    'observations' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backup_details extends Model
{
    
    public $table = 'backupDetails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
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
    'relaunch',
    'relanzar'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function backups()
{
return $this->hasOne("App\Http\Models\admin1\backups","id","backup_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function applications()
{
return $this->belongsToMany("App\Http\Models\admin1\applications","backup_detail_applications","backup_detail_id","applications_id");
}
}

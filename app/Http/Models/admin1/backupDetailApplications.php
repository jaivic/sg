<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backup_detail_applications extends Model
{
    
    public $table = 'backupDetailApplications';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
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
    'observations'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function backupApplications()
{
return $this->hasOne("App\Http\Models\admin1\backupApplications","id","backup_application_id");
}
}

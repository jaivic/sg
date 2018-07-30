<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class schedule_backup_folders extends Model
{
    
    public $table = 'scheduleBackupFolders';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'backups_aplicacion_id',
    'name',
    'description'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function scheduleBackupApplications()
{
return $this->hasOne("App\Http\Models\admin1\scheduleBackupApplications","id","backups_aplicacion_id");
}
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class schedule_backup_databases extends Model
{
    
    public $table = 'scheduleBackupDatabases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'schedule_backup_id',
    'name',
    'orden'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function scheduleBackups()
{
return $this->hasOne("App\Http\Models\admin1\scheduleBackups","id","schedule_backup_id");
}
}

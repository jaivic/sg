<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class ticket_backup_databases extends Model
{
    
    public $table = 'ticketBackupDatabases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ticket_id',
    'database_id',
    'server_id',
    'database_name',
    'url',
    'size',
    'status',
    'executed_at'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function tickets()
{
return $this->hasOne("App\Http\Models\admin1\tickets","id","ticket_id");
}
}

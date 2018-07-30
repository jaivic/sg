<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class ticket_restore_databases extends Model
{
    
    public $table = 'ticketRestoreDatabases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ticket_id',
    'production_server_id',
    'production_database',
    'environment_id',
    'server_id',
    'database',
    'status',
    'log'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function tickets()
{
return $this->hasOne("App\Http\Models\admin1\tickets","id","ticket_id");
}
}

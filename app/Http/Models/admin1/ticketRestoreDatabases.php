<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class ticketRestoreDatabases extends Model
{
    use SoftDeletes;
    public $table = 'ticket_restore_databases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'ticket_id',
    'production_server_id',
    'production_database',
    'environment_id',
    'server_id',
    'database',
    'created_at',
    'updated_at',
    'status',
    'log'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ticket_id' => 'integer',
    'production_server_id' => 'integer',
    'production_database' => 'string',
    'environment_id' => 'integer',
    'server_id' => 'integer',
    'database' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'status' => 'string',
    'log' => 'string'
    ];

    
}

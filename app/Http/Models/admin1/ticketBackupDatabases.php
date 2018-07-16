<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class ticketBackupDatabases extends Model
{
    use SoftDeletes;
    public $table = 'ticket_backup_databases';
    public $timestamps = false;

    
    
    public $date = [ 
    'executed_at' ];
    public $fillable = [
        
    'id',
    'ticket_id',
    'database_id',
    'server_id',
    'database_name',
    'url',
    'size',
    'status',
    'executed_at',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ticket_id' => 'integer',
    'database_id' => 'integer',
    'server_id' => 'integer',
    'database_name' => 'string',
    'url' => 'string',
    'size' => 'string',
    'status' => 'string',
    'executed_at' => 'datetime',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class scheduleBackupDatabases extends Model
{
    use SoftDeletes;
    public $table = 'schedule_backup_databases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'schedule_backup_id',
    'name',
    'created_at',
    'updated_at',
    'orden'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'schedule_backup_id' => 'integer',
    'name' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'orden' => 'integer'
    ];

    
}

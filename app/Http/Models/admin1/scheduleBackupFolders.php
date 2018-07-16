<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class scheduleBackupFolders extends Model
{
    use SoftDeletes;
    public $table = 'schedule_backup_folders';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'backups_aplicacion_id',
    'name',
    'description',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'backups_aplicacion_id' => 'integer',
    'name' => 'string',
    'description' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

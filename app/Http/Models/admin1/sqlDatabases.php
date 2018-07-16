<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class sqlDatabases extends Model
{
    use SoftDeletes;
    public $table = 'sql_databases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'server_id',
    'status',
    'name',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'server_id' => 'integer',
    'status' => 'integer',
    'name' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

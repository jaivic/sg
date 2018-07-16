<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class fileConfigCatalogs extends Model
{
    use SoftDeletes;
    public $table = 'file_config_catalogs';
    public $timestamps = false;

    
    
    public $date = [ 
    'deleted_at' ];
    public $fillable = [
        
    'id',
    'application_id',
    'environment_id',
    'storage',
    'filename',
    'created_at',
    'updated_at',
    'deleted_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'application_id' => 'integer',
    'environment_id' => 'integer',
    'storage' => 'string',
    'filename' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime'
    ];

    
}

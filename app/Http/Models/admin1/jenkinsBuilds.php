<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class jenkinsBuilds extends Model
{
    use SoftDeletes;
    public $table = 'jenkins_builds';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'application_id',
    'environment_id',
    'number',
    'bucket',
    'key',
    'bundle_type',
    'commit_id',
    'status',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'application_id' => 'integer',
    'environment_id' => 'integer',
    'number' => 'integer',
    'bucket' => 'string',
    'key' => 'string',
    'bundle_type' => 'string',
    'commit_id' => 'string',
    'status' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

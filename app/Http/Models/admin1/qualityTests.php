<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class qualityTests extends Model
{
    use SoftDeletes;
    public $table = 'quality_tests';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'name',
    'file',
    'application_id',
    'environment_id',
    'user_id',
    'description',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'name' => 'string',
    'file' => 'string',
    'application_id' => 'integer',
    'environment_id' => 'integer',
    'user_id' => 'integer',
    'description' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

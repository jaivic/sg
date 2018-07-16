<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class deploymentInstanceSummaries extends Model
{
    
    public $table = 'deployment_instance_summaries';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'deployment_information_id',
    'instance_id',
    'status',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'deployment_information_id' => 'integer',
    'instance_id' => 'string',
    'status' => 'boolean',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

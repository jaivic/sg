<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class applications extends Model
{
    
    public $table = 'applications';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'name',
    'aws_account_id',
    'repository',
    'deployment_type',
    'url',
    'sonar_key',
    'json_rules',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'name' => 'string',
    'aws_account_id' => 'integer',
    'repository' => 'string',
    'deployment_type' => 'string',
    'url' => 'string',
    'sonar_key' => 'string',
    'json_rules' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

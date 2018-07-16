<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class awsAccounts extends Model
{
    
    public $table = 'aws_accounts';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'name',
    'access_key',
    'secret_key',
    'region',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'name' => 'string',
    'access_key' => 'string',
    'secret_key' => 'string',
    'region' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

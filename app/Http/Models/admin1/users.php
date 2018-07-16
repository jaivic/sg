<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use SoftDeletes;
    public $table = 'users';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'name',
    'email',
    'password',
    'github_account',
    'timezone',
    'remember_token',
    'created_at',
    'updated_at',
    'slack_user_id'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'name' => 'string',
    'email' => 'string',
    'password' => 'string',
    'github_account' => 'string',
    'timezone' => 'string',
    'remember_token' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'slack_user_id' => 'string'
    ];

    
}

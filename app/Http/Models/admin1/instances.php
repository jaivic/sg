<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class instances extends Model
{
    use SoftDeletes;
    public $table = 'instances';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'environment_id',
    'type',
    'name',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'environment_id' => 'integer',
    'type' => 'string',
    'name' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

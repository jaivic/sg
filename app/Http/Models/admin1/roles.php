<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class roles extends Model
{
    use SoftDeletes;
    public $table = 'roles';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'name',
    'display_name',
    'description',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'name' => 'string',
    'display_name' => 'string',
    'description' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

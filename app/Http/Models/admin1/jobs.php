<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class jobs extends Model
{
    use SoftDeletes;
    public $table = 'jobs';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'queue',
    'payload',
    'attempts',
    'reserved_at',
    'available_at',
    'created_at'
    ];

    protected $casts = [
        
    'id' => 'bigint',
    'queue' => 'string',
    'payload' => 'string',
    'attempts' => 'boolean',
    'reserved_at' => 'integer',
    'available_at' => 'integer',
    'created_at' => 'integer'
    ];

    
}

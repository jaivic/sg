<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class retentions extends Model
{
    use SoftDeletes;
    public $table = 'retentions';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'day',
    'route',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'day' => 'integer',
    'route' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

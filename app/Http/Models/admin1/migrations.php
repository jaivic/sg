<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class migrations extends Model
{
    use SoftDeletes;
    public $table = 'migrations';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'migration',
    'batch'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'migration' => 'string',
    'batch' => 'integer'
    ];

    
}

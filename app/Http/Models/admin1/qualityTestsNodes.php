<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class qualityTestsNodes extends Model
{
    use SoftDeletes;
    public $table = 'quality_tests_nodes';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'ip',
    'url',
    'qualitytest_id',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ip' => 'string',
    'url' => 'string',
    'qualitytest_id' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

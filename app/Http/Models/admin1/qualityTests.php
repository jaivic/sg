<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class quality_tests extends Model
{
    
    public $table = 'qualityTests';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'file',
    'application_id',
    'environment_id',
    'user_id',
    'description'
    ];


    
}

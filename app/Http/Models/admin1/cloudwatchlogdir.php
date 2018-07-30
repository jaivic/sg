<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class cloudwatchlogdir extends Model
{
    
    public $table = 'cloudwatchlogdir';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'application_id',
    'name'
    ];


    
}

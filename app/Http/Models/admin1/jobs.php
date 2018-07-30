<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class jobs extends Model
{
    
    public $table = 'jobs';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'queue',
    'payload',
    'attempts',
    'reserved_at',
    'available_at'
    ];


    
}

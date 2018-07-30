<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class retentions extends Model
{
    
    public $table = 'retentions';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'day',
    'route'
    ];


    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class auto_test_detalles extends Model
{
    
    public $table = 'autoTestDetalles';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'auto_test_id',
    'name',
    'url_prueba'
    ];


    
}

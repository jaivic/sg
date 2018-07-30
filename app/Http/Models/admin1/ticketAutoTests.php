<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class ticket_auto_tests extends Model
{
    
    public $table = 'ticketAutoTests';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ticket_id',
    'grep',
    'status',
    'auto_test_repo_id',
    'ruta_zip',
    'ruta_web',
    'detalle',
    'url_prueba'
    ];


    
}

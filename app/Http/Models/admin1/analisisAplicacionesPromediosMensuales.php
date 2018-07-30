<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class analisis_aplicaciones_promedios_mensuales extends Model
{
    
    public $table = 'analisisAplicacionesPromediosMensuales';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'month',
    'year',
    'sqale_index',
    'sqale_debt_ratio',
    'performance',
    'page_load_time'
    ];


    
}

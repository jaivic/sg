<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class analisis_aplicaciones_promedios extends Model
{
    
    public $table = 'analisisAplicacionesPromedios';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'total_aplicaciones',
    'sqale_index',
    'page_load_time',
    'page_bytes',
    'sqale_debt_ratio',
    'performance',
    'performance_qualification',
    'pagespeed_score',
    'yslow_score',
    'fecha'
    ];


    
}

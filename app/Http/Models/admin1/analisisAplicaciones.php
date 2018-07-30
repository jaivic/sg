<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class analisis_aplicaciones extends Model
{
    
    public $table = 'analisisAplicaciones';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'aplicacion_id',
    'aplicacion_nombre',
    'aplicacion_url',
    'page_bytes',
    'page_bytes_text',
    'page_load_time',
    'page_load_time_text',
    'pagespeed_score',
    'pagespeed_score_text',
    'yslow_score',
    'yslow_score_text',
    'sqale_index',
    'sqale_index_text',
    'sqale_index_trend',
    'sqale_debt_ratio',
    'sqale_debt_ratio_text',
    'sqale_debt_ratio_trend',
    'performance',
    'performance_qualification',
    'aplicacion_sonar_key',
    'fecha'
    ];


    
}

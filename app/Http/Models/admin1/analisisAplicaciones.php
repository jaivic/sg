<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class analisisAplicaciones extends Model
{
    
    public $table = 'analisis_aplicaciones';
    
    
    
    public $date = [ 
    'fecha' ];
    public $fillable = [
        
    'id',
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
    'fecha',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'aplicacion_id' => 'integer',
    'aplicacion_nombre' => 'string',
    'aplicacion_url' => 'string',
    'page_bytes' => 'integer',
    'page_bytes_text' => 'float',
    'page_load_time' => 'integer',
    'page_load_time_text' => 'float',
    'pagespeed_score' => 'float',
    'pagespeed_score_text' => 'float',
    'yslow_score' => 'integer',
    'yslow_score_text' => 'float',
    'sqale_index' => 'integer',
    'sqale_index_text' => 'string',
    'sqale_index_trend' => 'string',
    'sqale_debt_ratio' => 'float',
    'sqale_debt_ratio_text' => 'float',
    'sqale_debt_ratio_trend' => 'string',
    'performance' => 'float',
    'performance_qualification' => 'string',
    'aplicacion_sonar_key' => 'string',
    'fecha' => 'datetime',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

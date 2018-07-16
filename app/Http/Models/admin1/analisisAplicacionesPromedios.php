<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class analisisAplicacionesPromedios extends Model
{
    
    public $table = 'analisis_aplicaciones_promedios';
    
    
    
    public $date = [ 
    'fecha' ];
    public $fillable = [
        
    'id',
    'total_aplicaciones',
    'sqale_index',
    'page_load_time',
    'page_bytes',
    'sqale_debt_ratio',
    'performance',
    'performance_qualification',
    'pagespeed_score',
    'yslow_score',
    'fecha',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'total_aplicaciones' => 'integer',
    'sqale_index' => 'float',
    'page_load_time' => 'float',
    'page_bytes' => 'float',
    'sqale_debt_ratio' => 'float',
    'performance' => 'float',
    'performance_qualification' => 'string',
    'pagespeed_score' => 'float',
    'yslow_score' => 'float',
    'fecha' => 'datetime',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

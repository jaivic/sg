<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class analisisAplicacionesPromediosMensuales extends Model
{
    
    public $table = 'analisis_aplicaciones_promedios_mensuales';
    
    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'month',
    'year',
    'sqale_index',
    'sqale_debt_ratio',
    'performance',
    'page_load_time',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'month' => 'integer',
    'year' => 'integer',
    'sqale_index' => 'float',
    'sqale_debt_ratio' => 'float',
    'performance' => 'float',
    'page_load_time' => 'float',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

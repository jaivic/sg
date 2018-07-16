<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backupReportePoliticas extends Model
{
    
    public $table = 'backup_reporte_politicas';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'file_name',
    'file_type',
    'file_size',
    'file_path',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'file_name' => 'string',
    'file_type' => 'string',
    'file_size' => 'string',
    'file_path' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

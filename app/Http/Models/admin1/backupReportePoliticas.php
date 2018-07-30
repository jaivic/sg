<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class backup_reporte_politicas extends Model
{
    
    public $table = 'backupReportePoliticas';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'file_name',
    'file_type',
    'file_size',
    'file_path'
    ];


    
}

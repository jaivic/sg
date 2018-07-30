<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class sql_databases extends Model
{
    
    public $table = 'sqlDatabases';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'server_id',
    'status',
    'name'
    ];


    
}

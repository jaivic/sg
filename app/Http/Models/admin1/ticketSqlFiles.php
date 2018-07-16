<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class ticketSqlFiles extends Model
{
    use SoftDeletes;
    public $table = 'ticket_sql_files';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'ticket_id',
    'name',
    'order',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ticket_id' => 'integer',
    'name' => 'string',
    'order' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

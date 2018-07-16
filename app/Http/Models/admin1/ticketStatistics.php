<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class ticketStatistics extends Model
{
    use SoftDeletes;
    public $table = 'ticket_statistics';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'ticket_id',
    'name',
    'value',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ticket_id' => 'integer',
    'name' => 'string',
    'value' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

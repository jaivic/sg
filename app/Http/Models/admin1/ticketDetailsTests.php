<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class ticketDetailsTests extends Model
{
    use SoftDeletes;
    public $table = 'ticket_details_tests';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'ticket_id',
    'quality_tests_id',
    'status',
    'details',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ticket_id' => 'integer',
    'quality_tests_id' => 'integer',
    'status' => 'string',
    'details' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

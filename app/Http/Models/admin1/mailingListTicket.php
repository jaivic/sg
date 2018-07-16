<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class mailingListTicket extends Model
{
    use SoftDeletes;
    public $table = 'mailing_list_ticket';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'mailing_list_id',
    'ticket_id',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'mailing_list_id' => 'integer',
    'ticket_id' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

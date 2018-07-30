<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class mailing_list_ticket extends Model
{
    
    public $table = 'mailingListTicket';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'mailing_list_id',
    'ticket_id'
    ];


    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class file_config_catalog_ticket extends Model
{
    
    public $table = 'fileConfigCatalogTicket';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'file_config_catalog_id',
    'ticket_id'
    ];


    
}

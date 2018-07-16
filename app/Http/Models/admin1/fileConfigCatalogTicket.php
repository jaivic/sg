<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class fileConfigCatalogTicket extends Model
{
    use SoftDeletes;
    public $table = 'file_config_catalog_ticket';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'file_config_catalog_id',
    'ticket_id'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'file_config_catalog_id' => 'integer',
    'ticket_id' => 'integer'
    ];

    
}

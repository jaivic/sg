<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class application_user extends Model
{
    
    public $table = 'applicationUser';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'application_id',
    'user_id'
    ];


    
}

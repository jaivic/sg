<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class password_resets extends Model
{
    
    public $table = 'passwordResets';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'email',
    'token'
    ];


    
}

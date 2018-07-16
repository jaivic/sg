<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class applicationUser extends Model
{
    
    public $table = 'application_user';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'application_id',
    'user_id'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'application_id' => 'integer',
    'user_id' => 'integer'
    ];

    
}

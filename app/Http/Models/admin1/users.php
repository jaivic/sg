<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class users extends Model
{
    
    public $table = 'users';
    public $timestamps = false;


    protected $hidden = [
        'password', 'remember_token',
    ];
    public $date = [  ];
    public $fillable = [
        
    'name',
    'email',
    'password',
    'remember_token'
    ];


    
}

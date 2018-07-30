<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class aws_accounts extends Model
{
    
    public $table = 'awsAccounts';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'access_key',
    'secret_key',
    'region',
    'nlb'
    ];


    
}

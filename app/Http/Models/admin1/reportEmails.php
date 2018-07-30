<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class report_emails extends Model
{
    
    public $table = 'reportEmails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'email'
    ];


    
}

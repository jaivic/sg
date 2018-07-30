<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class global_notification_mail_bds extends Model
{
    
    public $table = 'globalNotificationMailBds';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'email'
    ];


    
}

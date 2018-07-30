<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class global_notification_mails extends Model
{
    
    public $table = 'globalNotificationMails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'email'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function bds()
{
return $this->belongsToMany("App\Http\Models\admin1\bds","global_notification_mail_bds","global_notification_mail_id","bds_id");
}
}

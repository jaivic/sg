<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class mails extends Model
{
    
    public $table = 'mails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'mailing_list_id',
    'mail'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function mailingLists()
{
return $this->hasOne("App\Http\Models\admin1\mailingLists","id","mailing_list_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function global_notifications()
{
return $this->hasMany("App\Http\Models\admin1\global_notifications","global_notification_id","mail_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function l_notification_mail_bds()
{
return $this->belongsToMany("App\Http\Models\admin1\l_notification_mail_bds","global_notification_mail_bds","mail_id","l_notification_mail_bds_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\HasMany
**/
public function hasManyglobal_notifications()
{
return $this->hasMany("App\Http\Models\admin1\hasManyglobal_notifications","global_notification_id","mail_id");
}
}

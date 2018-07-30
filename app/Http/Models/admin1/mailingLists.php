<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class mailing_lists extends Model
{
    
    public $table = 'mailingLists';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'user_id',
    'name'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function users()
{
return $this->hasOne("App\Http\Models\admin1\users","id","user_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function tickets()
{
return $this->belongsToMany("App\Http\Models\admin1\tickets","mailing_list_ticket","mailing_list_id","ticket_id");
}
}

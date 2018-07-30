<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class slack_channels extends Model
{
    
    public $table = 'slackChannels';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'application_id',
    'name'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function applications()
{
return $this->hasOne("App\Http\Models\admin1\applications","id","application_id");
}
}

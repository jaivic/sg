<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class jenkins_builds extends Model
{
    
    public $table = 'jenkinsBuilds';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'application_id',
    'environment_id',
    'number',
    'bucket',
    'key',
    'bundle_type',
    'commit_id',
    'status'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function applications()
{
return $this->hasOne("App\Http\Models\admin1\applications","id","application_id");
}
}

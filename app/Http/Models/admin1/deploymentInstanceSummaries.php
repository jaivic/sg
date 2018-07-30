<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class deployment_instance_summaries extends Model
{
    
    public $table = 'deploymentInstanceSummaries';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'deployment_information_id',
    'instance_id',
    'status'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function deploymentInformations()
{
return $this->hasOne("App\Http\Models\admin1\deploymentInformations","id","deployment_information_id");
}
}

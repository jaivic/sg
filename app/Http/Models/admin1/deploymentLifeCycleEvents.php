<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class deployment_life_cycle_events extends Model
{
    
    public $table = 'deploymentLifeCycleEvents';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'deployment_instance_summary_id',
    'diagnostics_error_code',
    'diagnostics_log_tail',
    'diagnostics_message',
    'diagnostics_script_name',
    'lifecycle_event_name',
    'start_time',
    'end_time',
    'status'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function deploymentInstanceSummaries()
{
return $this->hasOne("App\Http\Models\admin1\deploymentInstanceSummaries","id","deployment_instance_summary_id");
}
}

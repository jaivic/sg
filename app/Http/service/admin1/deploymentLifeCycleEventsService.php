<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\deploymentLifeCycleEvents;

class deploymentLifeCycleEventsService 
{

    public function create($data)
    {
        return deploymentLifeCycleEvents::create($data);
    }

    public function update($data,$id)
    {
        $deploymentLifeCycleEvents = deploymentLifeCycleEvents::findOrFail($id);
        $deploymentLifeCycleEvents->update($data);
        return $deploymentLifeCycleEvents;
    }
    public function delete($id)
    {
        $deploymentLifeCycleEvents = deploymentLifeCycleEvents::findOrFail($id);
        $deploymentLifeCycleEvents->delete();
        return $deploymentLifeCycleEvents;
    }

}

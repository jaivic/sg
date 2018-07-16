<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\deploymentInstanceSummaries;

class deploymentInstanceSummariesService 
{

    public function create($data)
    {
        return deploymentInstanceSummaries::create($data);
    }

    public function update($data,$id)
    {
        $deploymentInstanceSummaries = deploymentInstanceSummaries::findOrFail($id);
        $deploymentInstanceSummaries->update($data);
        return $deploymentInstanceSummaries;
    }
    public function delete($id)
    {
        $deploymentInstanceSummaries = deploymentInstanceSummaries::findOrFail($id);
        $deploymentInstanceSummaries->delete();
        return $deploymentInstanceSummaries;
    }

}

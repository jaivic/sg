<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\qualityTestsNodes;

class qualityTestsNodesService 
{

    public function create($data)
    {
        return qualityTestsNodes::create($data);
    }

    public function update($data,$id)
    {
        $qualityTestsNodes = qualityTestsNodes::findOrFail($id);
        $qualityTestsNodes->update($data);
        return $qualityTestsNodes;
    }
    public function delete($id)
    {
        $qualityTestsNodes = qualityTestsNodes::findOrFail($id);
        $qualityTestsNodes->delete();
        return $qualityTestsNodes;
    }

}

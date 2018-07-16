<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\qualityTests;

class qualityTestsService 
{

    public function create($data)
    {
        return qualityTests::create($data);
    }

    public function update($data,$id)
    {
        $qualityTests = qualityTests::findOrFail($id);
        $qualityTests->update($data);
        return $qualityTests;
    }
    public function delete($id)
    {
        $qualityTests = qualityTests::findOrFail($id);
        $qualityTests->delete();
        return $qualityTests;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\stressTests;

class stressTestsService 
{

    public function create($data)
    {
        return stressTests::create($data);
    }

    public function update($data,$id)
    {
        $stressTests = stressTests::findOrFail($id);
        $stressTests->update($data);
        return $stressTests;
    }
    public function delete($id)
    {
        $stressTests = stressTests::findOrFail($id);
        $stressTests->delete();
        return $stressTests;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\jenkinsBuilds;

class jenkinsBuildsService 
{

    public function create($data)
    {
        return jenkinsBuilds::create($data);
    }

    public function update($data,$id)
    {
        $jenkinsBuilds = jenkinsBuilds::findOrFail($id);
        $jenkinsBuilds->update($data);
        return $jenkinsBuilds;
    }
    public function delete($id)
    {
        $jenkinsBuilds = jenkinsBuilds::findOrFail($id);
        $jenkinsBuilds->delete();
        return $jenkinsBuilds;
    }

}

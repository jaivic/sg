<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\instances;

class instancesService 
{

    public function create($data)
    {
        return instances::create($data);
    }

    public function update($data,$id)
    {
        $instances = instances::findOrFail($id);
        $instances->update($data);
        return $instances;
    }
    public function delete($id)
    {
        $instances = instances::findOrFail($id);
        $instances->delete();
        return $instances;
    }

}

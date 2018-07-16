<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\environments;

class environmentsService 
{

    public function create($data)
    {
        return environments::create($data);
    }

    public function update($data,$id)
    {
        $environments = environments::findOrFail($id);
        $environments->update($data);
        return $environments;
    }
    public function delete($id)
    {
        $environments = environments::findOrFail($id);
        $environments->delete();
        return $environments;
    }

}

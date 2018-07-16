<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\workflows;

class workflowsService 
{

    public function create($data)
    {
        return workflows::create($data);
    }

    public function update($data,$id)
    {
        $workflows = workflows::findOrFail($id);
        $workflows->update($data);
        return $workflows;
    }
    public function delete($id)
    {
        $workflows = workflows::findOrFail($id);
        $workflows->delete();
        return $workflows;
    }

}

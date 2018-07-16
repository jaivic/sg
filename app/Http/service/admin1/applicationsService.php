<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\applications;

class applicationsService 
{

    public function create($data)
    {
        return applications::create($data);
    }

    public function update($data,$id)
    {
        $applications = applications::findOrFail($id);
        $applications->update($data);
        return $applications;
    }
    public function delete($id)
    {
        $applications = applications::findOrFail($id);
        $applications->delete();
        return $applications;
    }

}

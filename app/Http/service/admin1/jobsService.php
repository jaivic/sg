<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\jobs;

class jobsService 
{

    public function create($data)
    {
        return jobs::create($data);
    }

    public function update($data,$id)
    {
        $jobs = jobs::findOrFail($id);
        $jobs->update($data);
        return $jobs;
    }
    public function delete($id)
    {
        $jobs = jobs::findOrFail($id);
        $jobs->delete();
        return $jobs;
    }

}

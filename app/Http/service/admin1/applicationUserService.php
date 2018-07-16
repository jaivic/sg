<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\applicationUser;

class applicationUserService 
{

    public function create($data)
    {
        return applicationUser::create($data);
    }

    public function update($data,$id)
    {
        $applicationUser = applicationUser::findOrFail($id);
        $applicationUser->update($data);
        return $applicationUser;
    }
    public function delete($id)
    {
        $applicationUser = applicationUser::findOrFail($id);
        $applicationUser->delete();
        return $applicationUser;
    }

}

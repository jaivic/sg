<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\roleUser;

class roleUserService 
{

    public function create($data)
    {
        return roleUser::create($data);
    }

    public function update($data,$id)
    {
        $roleUser = roleUser::findOrFail($id);
        $roleUser->update($data);
        return $roleUser;
    }
    public function delete($id)
    {
        $roleUser = roleUser::findOrFail($id);
        $roleUser->delete();
        return $roleUser;
    }

}

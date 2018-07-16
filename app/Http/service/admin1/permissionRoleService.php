<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\permissionRole;

class permissionRoleService 
{

    public function create($data)
    {
        return permissionRole::create($data);
    }

    public function update($data,$id)
    {
        $permissionRole = permissionRole::findOrFail($id);
        $permissionRole->update($data);
        return $permissionRole;
    }
    public function delete($id)
    {
        $permissionRole = permissionRole::findOrFail($id);
        $permissionRole->delete();
        return $permissionRole;
    }

}

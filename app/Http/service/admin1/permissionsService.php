<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\permissions;

class permissionsService 
{

    public function create($data)
    {
        return permissions::create($data);
    }

    public function update($data,$id)
    {
        $permissions = permissions::findOrFail($id);
        $permissions->update($data);
        return $permissions;
    }
    public function delete($id)
    {
        $permissions = permissions::findOrFail($id);
        $permissions->delete();
        return $permissions;
    }

}

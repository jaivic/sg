<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\roles;

class rolesService 
{

    public function create($data)
    {
        return roles::create($data);
    }

    public function update($data,$id)
    {
        $roles = roles::findOrFail($id);
        $roles->update($data);
        return $roles;
    }
    public function delete($id)
    {
        $roles = roles::findOrFail($id);
        $roles->delete();
        return $roles;
    }

}

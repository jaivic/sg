<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\users;

class usersService 
{

    public function create($data)
    {
        return users::create($data);
    }

    public function update($data,$id)
    {
        $users = users::findOrFail($id);
        $users->update($data);
        return $users;
    }
    public function delete($id)
    {
        $users = users::findOrFail($id);
        $users->delete();
        return $users;
    }

}

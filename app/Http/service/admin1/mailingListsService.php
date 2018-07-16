<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\mailingLists;

class mailingListsService 
{

    public function create($data)
    {
        return mailingLists::create($data);
    }

    public function update($data,$id)
    {
        $mailingLists = mailingLists::findOrFail($id);
        $mailingLists->update($data);
        return $mailingLists;
    }
    public function delete($id)
    {
        $mailingLists = mailingLists::findOrFail($id);
        $mailingLists->delete();
        return $mailingLists;
    }

}

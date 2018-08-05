<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\passwordResets;

class passwordResetsService 
{

    public function create($data)
    {
        return passwordResets::create($data);
    }

    public function update($data,$id)
    {
        $passwordResets = passwordResets::findOrFail($id);
        $passwordResets->update($data);
        return $passwordResets;
    }
    public function delete($id)
    {
        $passwordResets = passwordResets::findOrFail($id);
        $passwordResets->delete();
        return $passwordResets;
    }

}

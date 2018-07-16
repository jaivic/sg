<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\retentions;

class retentionsService 
{

    public function create($data)
    {
        return retentions::create($data);
    }

    public function update($data,$id)
    {
        $retentions = retentions::findOrFail($id);
        $retentions->update($data);
        return $retentions;
    }
    public function delete($id)
    {
        $retentions = retentions::findOrFail($id);
        $retentions->delete();
        return $retentions;
    }

}

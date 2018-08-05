<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\tags;

class tagsService 
{

    public function create($data)
    {
        return tags::create($data);
    }

    public function update($data,$id)
    {
        $tags = tags::findOrFail($id);
        $tags->update($data);
        return $tags;
    }
    public function delete($id)
    {
        $tags = tags::findOrFail($id);
        $tags->delete();
        return $tags;
    }

}

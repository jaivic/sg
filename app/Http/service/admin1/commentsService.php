<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\comments;

class commentsService 
{

    public function create($data)
    {
        return comments::create($data);
    }

    public function update($data,$id)
    {
        $comments = comments::findOrFail($id);
        $comments->update($data);
        return $comments;
    }
    public function delete($id)
    {
        $comments = comments::findOrFail($id);
        $comments->delete();
        return $comments;
    }

}

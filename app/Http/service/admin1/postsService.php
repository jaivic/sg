<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\posts;

class postsService 
{

    public function create($data)
    {
        return posts::create($data);
    }

    public function update($data,$id)
    {
        $posts = posts::findOrFail($id);
        $posts->update($data);
        return $posts;
    }
    public function delete($id)
    {
        $posts = posts::findOrFail($id);
        $posts->delete();
        return $posts;
    }

}

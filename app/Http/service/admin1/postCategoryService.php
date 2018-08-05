<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\postCategory;

class postCategoryService 
{

    public function create($data)
    {
        return postCategory::create($data);
    }

    public function update($data,$id)
    {
        $postCategory = postCategory::findOrFail($id);
        $postCategory->update($data);
        return $postCategory;
    }
    public function delete($id)
    {
        $postCategory = postCategory::findOrFail($id);
        $postCategory->delete();
        return $postCategory;
    }

}

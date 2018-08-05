<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\categories;

class categoriesService 
{

    public function create($data)
    {
        return categories::create($data);
    }

    public function update($data,$id)
    {
        $categories = categories::findOrFail($id);
        $categories->update($data);
        return $categories;
    }
    public function delete($id)
    {
        $categories = categories::findOrFail($id);
        $categories->delete();
        return $categories;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\fileConfigCatalogs;

class fileConfigCatalogsService 
{

    public function create($data)
    {
        return fileConfigCatalogs::create($data);
    }

    public function update($data,$id)
    {
        $fileConfigCatalogs = fileConfigCatalogs::findOrFail($id);
        $fileConfigCatalogs->update($data);
        return $fileConfigCatalogs;
    }
    public function delete($id)
    {
        $fileConfigCatalogs = fileConfigCatalogs::findOrFail($id);
        $fileConfigCatalogs->delete();
        return $fileConfigCatalogs;
    }

}

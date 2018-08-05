<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\migrations;

class migrationsService 
{

    public function create($data)
    {
        return migrations::create($data);
    }

    public function update($data,$id)
    {
        $migrations = migrations::findOrFail($id);
        $migrations->update($data);
        return $migrations;
    }
    public function delete($id)
    {
        $migrations = migrations::findOrFail($id);
        $migrations->delete();
        return $migrations;
    }

}

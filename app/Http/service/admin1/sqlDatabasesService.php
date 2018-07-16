<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\sqlDatabases;

class sqlDatabasesService 
{

    public function create($data)
    {
        return sqlDatabases::create($data);
    }

    public function update($data,$id)
    {
        $sqlDatabases = sqlDatabases::findOrFail($id);
        $sqlDatabases->update($data);
        return $sqlDatabases;
    }
    public function delete($id)
    {
        $sqlDatabases = sqlDatabases::findOrFail($id);
        $sqlDatabases->delete();
        return $sqlDatabases;
    }

}

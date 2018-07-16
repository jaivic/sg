<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\scheduleBackupDatabases;

class scheduleBackupDatabasesService 
{

    public function create($data)
    {
        return scheduleBackupDatabases::create($data);
    }

    public function update($data,$id)
    {
        $scheduleBackupDatabases = scheduleBackupDatabases::findOrFail($id);
        $scheduleBackupDatabases->update($data);
        return $scheduleBackupDatabases;
    }
    public function delete($id)
    {
        $scheduleBackupDatabases = scheduleBackupDatabases::findOrFail($id);
        $scheduleBackupDatabases->delete();
        return $scheduleBackupDatabases;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\ticketBackupDatabases;

class ticketBackupDatabasesService 
{

    public function create($data)
    {
        return ticketBackupDatabases::create($data);
    }

    public function update($data,$id)
    {
        $ticketBackupDatabases = ticketBackupDatabases::findOrFail($id);
        $ticketBackupDatabases->update($data);
        return $ticketBackupDatabases;
    }
    public function delete($id)
    {
        $ticketBackupDatabases = ticketBackupDatabases::findOrFail($id);
        $ticketBackupDatabases->delete();
        return $ticketBackupDatabases;
    }

}

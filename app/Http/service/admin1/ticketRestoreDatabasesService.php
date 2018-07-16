<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\ticketRestoreDatabases;

class ticketRestoreDatabasesService 
{

    public function create($data)
    {
        return ticketRestoreDatabases::create($data);
    }

    public function update($data,$id)
    {
        $ticketRestoreDatabases = ticketRestoreDatabases::findOrFail($id);
        $ticketRestoreDatabases->update($data);
        return $ticketRestoreDatabases;
    }
    public function delete($id)
    {
        $ticketRestoreDatabases = ticketRestoreDatabases::findOrFail($id);
        $ticketRestoreDatabases->delete();
        return $ticketRestoreDatabases;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\ticketSqlFiles;

class ticketSqlFilesService 
{

    public function create($data)
    {
        return ticketSqlFiles::create($data);
    }

    public function update($data,$id)
    {
        $ticketSqlFiles = ticketSqlFiles::findOrFail($id);
        $ticketSqlFiles->update($data);
        return $ticketSqlFiles;
    }
    public function delete($id)
    {
        $ticketSqlFiles = ticketSqlFiles::findOrFail($id);
        $ticketSqlFiles->delete();
        return $ticketSqlFiles;
    }

}

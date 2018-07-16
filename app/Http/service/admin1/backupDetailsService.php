<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\backupDetails;

class backupDetailsService 
{

    public function create($data)
    {
        return backupDetails::create($data);
    }

    public function update($data,$id)
    {
        $backupDetails = backupDetails::findOrFail($id);
        $backupDetails->update($data);
        return $backupDetails;
    }
    public function delete($id)
    {
        $backupDetails = backupDetails::findOrFail($id);
        $backupDetails->delete();
        return $backupDetails;
    }

}

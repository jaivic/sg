<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\backupApplications;

class backupApplicationsService 
{

    public function create($data)
    {
        return backupApplications::create($data);
    }

    public function update($data,$id)
    {
        $backupApplications = backupApplications::findOrFail($id);
        $backupApplications->update($data);
        return $backupApplications;
    }
    public function delete($id)
    {
        $backupApplications = backupApplications::findOrFail($id);
        $backupApplications->delete();
        return $backupApplications;
    }

}

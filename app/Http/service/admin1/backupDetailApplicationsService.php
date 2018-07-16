<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\backupDetailApplications;

class backupDetailApplicationsService 
{

    public function create($data)
    {
        return backupDetailApplications::create($data);
    }

    public function update($data,$id)
    {
        $backupDetailApplications = backupDetailApplications::findOrFail($id);
        $backupDetailApplications->update($data);
        return $backupDetailApplications;
    }
    public function delete($id)
    {
        $backupDetailApplications = backupDetailApplications::findOrFail($id);
        $backupDetailApplications->delete();
        return $backupDetailApplications;
    }

}

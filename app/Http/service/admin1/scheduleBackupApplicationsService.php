<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\scheduleBackupApplications;

class scheduleBackupApplicationsService 
{

    public function create($data)
    {
        return scheduleBackupApplications::create($data);
    }

    public function update($data,$id)
    {
        $scheduleBackupApplications = scheduleBackupApplications::findOrFail($id);
        $scheduleBackupApplications->update($data);
        return $scheduleBackupApplications;
    }
    public function delete($id)
    {
        $scheduleBackupApplications = scheduleBackupApplications::findOrFail($id);
        $scheduleBackupApplications->delete();
        return $scheduleBackupApplications;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\scheduleBackups;

class scheduleBackupsService 
{

    public function create($data)
    {
        return scheduleBackups::create($data);
    }

    public function update($data,$id)
    {
        $scheduleBackups = scheduleBackups::findOrFail($id);
        $scheduleBackups->update($data);
        return $scheduleBackups;
    }
    public function delete($id)
    {
        $scheduleBackups = scheduleBackups::findOrFail($id);
        $scheduleBackups->delete();
        return $scheduleBackups;
    }

}

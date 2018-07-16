<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\scheduleBackupFolders;

class scheduleBackupFoldersService 
{

    public function create($data)
    {
        return scheduleBackupFolders::create($data);
    }

    public function update($data,$id)
    {
        $scheduleBackupFolders = scheduleBackupFolders::findOrFail($id);
        $scheduleBackupFolders->update($data);
        return $scheduleBackupFolders;
    }
    public function delete($id)
    {
        $scheduleBackupFolders = scheduleBackupFolders::findOrFail($id);
        $scheduleBackupFolders->delete();
        return $scheduleBackupFolders;
    }

}

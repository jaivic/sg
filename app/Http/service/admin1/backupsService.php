<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\backups;

class backupsService 
{

    public function create($data)
    {
        return backups::create($data);
    }

    public function update($data,$id)
    {
        $backups = backups::findOrFail($id);
        $backups->update($data);
        return $backups;
    }
    public function delete($id)
    {
        $backups = backups::findOrFail($id);
        $backups->delete();
        return $backups;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\backupReportePoliticas;

class backupReportePoliticasService 
{

    public function create($data)
    {
        return backupReportePoliticas::create($data);
    }

    public function update($data,$id)
    {
        $backupReportePoliticas = backupReportePoliticas::findOrFail($id);
        $backupReportePoliticas->update($data);
        return $backupReportePoliticas;
    }
    public function delete($id)
    {
        $backupReportePoliticas = backupReportePoliticas::findOrFail($id);
        $backupReportePoliticas->delete();
        return $backupReportePoliticas;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\reportEmails;

class reportEmailsService 
{

    public function create($data)
    {
        return reportEmails::create($data);
    }

    public function update($data,$id)
    {
        $reportEmails = reportEmails::findOrFail($id);
        $reportEmails->update($data);
        return $reportEmails;
    }
    public function delete($id)
    {
        $reportEmails = reportEmails::findOrFail($id);
        $reportEmails->delete();
        return $reportEmails;
    }

}

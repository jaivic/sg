<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\globalNotificationMails;

class globalNotificationMailsService 
{

    public function create($data)
    {
        return globalNotificationMails::create($data);
    }

    public function update($data,$id)
    {
        $globalNotificationMails = globalNotificationMails::findOrFail($id);
        $globalNotificationMails->update($data);
        return $globalNotificationMails;
    }
    public function delete($id)
    {
        $globalNotificationMails = globalNotificationMails::findOrFail($id);
        $globalNotificationMails->delete();
        return $globalNotificationMails;
    }

}

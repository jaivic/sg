<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\mails;

class mailsService 
{

    public function create($data)
    {
        return mails::create($data);
    }

    public function update($data,$id)
    {
        $mails = mails::findOrFail($id);
        $mails->update($data);
        return $mails;
    }
    public function delete($id)
    {
        $mails = mails::findOrFail($id);
        $mails->delete();
        return $mails;
    }

}

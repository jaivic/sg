<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\mailingListTicket;

class mailingListTicketService 
{

    public function create($data)
    {
        return mailingListTicket::create($data);
    }

    public function update($data,$id)
    {
        $mailingListTicket = mailingListTicket::findOrFail($id);
        $mailingListTicket->update($data);
        return $mailingListTicket;
    }
    public function delete($id)
    {
        $mailingListTicket = mailingListTicket::findOrFail($id);
        $mailingListTicket->delete();
        return $mailingListTicket;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\ticketDetails;

class ticketDetailsService 
{

    public function create($data)
    {
        return ticketDetails::create($data);
    }

    public function update($data,$id)
    {
        $ticketDetails = ticketDetails::findOrFail($id);
        $ticketDetails->update($data);
        return $ticketDetails;
    }
    public function delete($id)
    {
        $ticketDetails = ticketDetails::findOrFail($id);
        $ticketDetails->delete();
        return $ticketDetails;
    }

}

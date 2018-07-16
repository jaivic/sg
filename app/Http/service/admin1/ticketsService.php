<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\tickets;

class ticketsService 
{

    public function create($data)
    {
        return tickets::create($data);
    }

    public function update($data,$id)
    {
        $tickets = tickets::findOrFail($id);
        $tickets->update($data);
        return $tickets;
    }
    public function delete($id)
    {
        $tickets = tickets::findOrFail($id);
        $tickets->delete();
        return $tickets;
    }

}

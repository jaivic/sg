<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\ticketDetailsTests;

class ticketDetailsTestsService 
{

    public function create($data)
    {
        return ticketDetailsTests::create($data);
    }

    public function update($data,$id)
    {
        $ticketDetailsTests = ticketDetailsTests::findOrFail($id);
        $ticketDetailsTests->update($data);
        return $ticketDetailsTests;
    }
    public function delete($id)
    {
        $ticketDetailsTests = ticketDetailsTests::findOrFail($id);
        $ticketDetailsTests->delete();
        return $ticketDetailsTests;
    }

}

<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\ticketStatistics;

class ticketStatisticsService 
{

    public function create($data)
    {
        return ticketStatistics::create($data);
    }

    public function update($data,$id)
    {
        $ticketStatistics = ticketStatistics::findOrFail($id);
        $ticketStatistics->update($data);
        return $ticketStatistics;
    }
    public function delete($id)
    {
        $ticketStatistics = ticketStatistics::findOrFail($id);
        $ticketStatistics->delete();
        return $ticketStatistics;
    }

}

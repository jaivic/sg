<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\fileConfigCatalogTicket;

class fileConfigCatalogTicketService 
{

    public function create($data)
    {
        return fileConfigCatalogTicket::create($data);
    }

    public function update($data,$id)
    {
        $fileConfigCatalogTicket = fileConfigCatalogTicket::findOrFail($id);
        $fileConfigCatalogTicket->update($data);
        return $fileConfigCatalogTicket;
    }
    public function delete($id)
    {
        $fileConfigCatalogTicket = fileConfigCatalogTicket::findOrFail($id);
        $fileConfigCatalogTicket->delete();
        return $fileConfigCatalogTicket;
    }

}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\ticketDetails;
use App\Http\Requests\CreateticketDetailsAPIRequest;
use App\Http\Requests\UpdateticketDetailsAPIRequest;
use App\Http\service\admin1\ticketDetailsService;
use App\Http\Controllers\AppBaseController;

class ticketDetailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketDetailsService(); 
    }
    public function store(CreateticketDetailsAPIRequest $Request)
    { 
      $ticketDetails = $this->service->create($Request->all());
      return $this->sendResponse($ticketDetails->toArray(), 'ticketDetails guardado exitosamente');
    }
    public function update(UpdateticketDetailsAPIRequest $Request,$id)
    {
       $ticketDetails = $this->service->update($Request->all(),$id);
       return $this->sendResponse($ticketDetails->toArray(), 'ticketDetails actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'ticketDetails eliminado correctamente');
    }

    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\mailingListTicket;
use App\Http\Requests\CreatemailingListTicketAPIRequest;
use App\Http\Requests\UpdatemailingListTicketAPIRequest;
use App\Http\service\admin1\mailingListTicketService;
use App\Http\Controllers\AppBaseController;

class mailingListTicketController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mailingListTicketService(); 
    }
    public function store(CreatemailingListTicketAPIRequest $Request)
    { 
      $mailingListTicket = $this->service->create($Request->all());
      return $this->sendResponse($mailingListTicket->toArray(), 'mailingListTicket guardado exitosamente');
    }
    public function update(UpdatemailingListTicketAPIRequest $Request,$id)
    {
       $mailingListTicket = $this->service->update($Request->all(),$id);
       return $this->sendResponse($mailingListTicket->toArray(), 'mailingListTicket actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'mailingListTicket eliminado correctamente');
    }

    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\ticketDetailsTests;
use App\Http\Requests\CreateticketDetailsTestsAPIRequest;
use App\Http\Requests\UpdateticketDetailsTestsAPIRequest;
use App\Http\service\admin1\ticketDetailsTestsService;
use App\Http\Controllers\AppBaseController;

class ticketDetailsTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketDetailsTestsService(); 
    }
    public function store(CreateticketDetailsTestsAPIRequest $Request)
    { 
      $ticketDetailsTests = $this->service->create($Request->all());
      return $this->sendResponse($ticketDetailsTests->toArray(), 'ticketDetailsTests guardado exitosamente');
    }
    public function update(UpdateticketDetailsTestsAPIRequest $Request,$id)
    {
       $ticketDetailsTests = $this->service->update($Request->all(),$id);
       return $this->sendResponse($ticketDetailsTests->toArray(), 'ticketDetailsTests actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'ticketDetailsTests eliminado correctamente');
    }

    
}

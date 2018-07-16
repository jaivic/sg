<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\tickets;
use App\Http\Requests\CreateticketsAPIRequest;
use App\Http\Requests\UpdateticketsAPIRequest;
use App\Http\service\admin1\ticketsService;
use App\Http\Controllers\AppBaseController;

class ticketsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketsService(); 
    }
    public function store(CreateticketsAPIRequest $Request)
    { 
      $tickets = $this->service->create($Request->all());
      return $this->sendResponse($tickets->toArray(), 'tickets guardado exitosamente');
    }
    public function update(UpdateticketsAPIRequest $Request,$id)
    {
       $tickets = $this->service->update($Request->all(),$id);
       return $this->sendResponse($tickets->toArray(), 'tickets actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'tickets eliminado correctamente');
    }

    
}

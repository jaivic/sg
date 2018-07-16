<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\fileConfigCatalogTicket;
use App\Http\Requests\CreatefileConfigCatalogTicketAPIRequest;
use App\Http\Requests\UpdatefileConfigCatalogTicketAPIRequest;
use App\Http\service\admin1\fileConfigCatalogTicketService;
use App\Http\Controllers\AppBaseController;

class fileConfigCatalogTicketController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new fileConfigCatalogTicketService(); 
    }
    public function store(CreatefileConfigCatalogTicketAPIRequest $Request)
    { 
      $fileConfigCatalogTicket = $this->service->create($Request->all());
      return $this->sendResponse($fileConfigCatalogTicket->toArray(), 'fileConfigCatalogTicket guardado exitosamente');
    }
    public function update(UpdatefileConfigCatalogTicketAPIRequest $Request,$id)
    {
       $fileConfigCatalogTicket = $this->service->update($Request->all(),$id);
       return $this->sendResponse($fileConfigCatalogTicket->toArray(), 'fileConfigCatalogTicket actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'fileConfigCatalogTicket eliminado correctamente');
    }

    
}

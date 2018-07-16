<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\ticketRestoreDatabases;
use App\Http\Requests\CreateticketRestoreDatabasesAPIRequest;
use App\Http\Requests\UpdateticketRestoreDatabasesAPIRequest;
use App\Http\service\admin1\ticketRestoreDatabasesService;
use App\Http\Controllers\AppBaseController;

class ticketRestoreDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketRestoreDatabasesService(); 
    }
    public function store(CreateticketRestoreDatabasesAPIRequest $Request)
    { 
      $ticketRestoreDatabases = $this->service->create($Request->all());
      return $this->sendResponse($ticketRestoreDatabases->toArray(), 'ticketRestoreDatabases guardado exitosamente');
    }
    public function update(UpdateticketRestoreDatabasesAPIRequest $Request,$id)
    {
       $ticketRestoreDatabases = $this->service->update($Request->all(),$id);
       return $this->sendResponse($ticketRestoreDatabases->toArray(), 'ticketRestoreDatabases actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'ticketRestoreDatabases eliminado correctamente');
    }

    
}

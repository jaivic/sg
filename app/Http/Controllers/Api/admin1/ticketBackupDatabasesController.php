<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\ticketBackupDatabases;
use App\Http\Requests\CreateticketBackupDatabasesAPIRequest;
use App\Http\Requests\UpdateticketBackupDatabasesAPIRequest;
use App\Http\service\admin1\ticketBackupDatabasesService;
use App\Http\Controllers\AppBaseController;

class ticketBackupDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketBackupDatabasesService(); 
    }
    public function store(CreateticketBackupDatabasesAPIRequest $Request)
    { 
      $ticketBackupDatabases = $this->service->create($Request->all());
      return $this->sendResponse($ticketBackupDatabases->toArray(), 'ticketBackupDatabases guardado exitosamente');
    }
    public function update(UpdateticketBackupDatabasesAPIRequest $Request,$id)
    {
       $ticketBackupDatabases = $this->service->update($Request->all(),$id);
       return $this->sendResponse($ticketBackupDatabases->toArray(), 'ticketBackupDatabases actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'ticketBackupDatabases eliminado correctamente');
    }

    
}

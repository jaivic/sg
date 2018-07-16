<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\ticketSqlFiles;
use App\Http\Requests\CreateticketSqlFilesAPIRequest;
use App\Http\Requests\UpdateticketSqlFilesAPIRequest;
use App\Http\service\admin1\ticketSqlFilesService;
use App\Http\Controllers\AppBaseController;

class ticketSqlFilesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketSqlFilesService(); 
    }
    public function store(CreateticketSqlFilesAPIRequest $Request)
    { 
      $ticketSqlFiles = $this->service->create($Request->all());
      return $this->sendResponse($ticketSqlFiles->toArray(), 'ticketSqlFiles guardado exitosamente');
    }
    public function update(UpdateticketSqlFilesAPIRequest $Request,$id)
    {
       $ticketSqlFiles = $this->service->update($Request->all(),$id);
       return $this->sendResponse($ticketSqlFiles->toArray(), 'ticketSqlFiles actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'ticketSqlFiles eliminado correctamente');
    }

    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\sqlDatabases;
use App\Http\Requests\CreatesqlDatabasesAPIRequest;
use App\Http\Requests\UpdatesqlDatabasesAPIRequest;
use App\Http\service\admin1\sqlDatabasesService;
use App\Http\Controllers\AppBaseController;

class sqlDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new sqlDatabasesService(); 
    }
    public function store(CreatesqlDatabasesAPIRequest $Request)
    { 
      $sqlDatabases = $this->service->create($Request->all());
      return $this->sendResponse($sqlDatabases->toArray(), 'sqlDatabases guardado exitosamente');
    }
    public function update(UpdatesqlDatabasesAPIRequest $Request,$id)
    {
       $sqlDatabases = $this->service->update($Request->all(),$id);
       return $this->sendResponse($sqlDatabases->toArray(), 'sqlDatabases actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'sqlDatabases eliminado correctamente');
    }

    
}

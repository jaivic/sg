<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\migrations;
use App\Http\Requests\CreatemigrationsAPIRequest;
use App\Http\Requests\UpdatemigrationsAPIRequest;
use App\Http\service\admin1\migrationsService;
use App\Http\Controllers\AppBaseController;

class migrationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new migrationsService(); 
    }
    public function store(CreatemigrationsAPIRequest $Request)
    { 
      $migrations = $this->service->create($Request->all());
      return $this->sendResponse($migrations->toArray(), 'migrations guardado exitosamente');
    }
    public function update(UpdatemigrationsAPIRequest $Request,$id)
    {
       $migrations = $this->service->update($Request->all(),$id);
       return $this->sendResponse($migrations->toArray(), 'migrations actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'migrations eliminado correctamente');
    }

    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\applications;
use App\Http\Requests\CreateapplicationsAPIRequest;
use App\Http\Requests\UpdateapplicationsAPIRequest;
use App\Http\service\admin1\applicationsService;
use App\Http\Controllers\AppBaseController;

class applicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new applicationsService(); 
    }
    public function store(CreateapplicationsAPIRequest $Request)
    { 
      $applications = $this->service->create($Request->all());
      return $this->sendResponse($applications->toArray(), 'applications guardado exitosamente');
    }
    public function update(UpdateapplicationsAPIRequest $Request,$id)
    {
       $applications = $this->service->update($Request->all(),$id);
       return $this->sendResponse($applications->toArray(), 'applications actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'applications eliminado correctamente');
    }

    
}

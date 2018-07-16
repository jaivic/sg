<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\deploymentInformations;
use App\Http\Requests\CreatedeploymentInformationsAPIRequest;
use App\Http\Requests\UpdatedeploymentInformationsAPIRequest;
use App\Http\service\admin1\deploymentInformationsService;
use App\Http\Controllers\AppBaseController;

class deploymentInformationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new deploymentInformationsService(); 
    }
    public function store(CreatedeploymentInformationsAPIRequest $Request)
    { 
      $deploymentInformations = $this->service->create($Request->all());
      return $this->sendResponse($deploymentInformations->toArray(), 'deploymentInformations guardado exitosamente');
    }
    public function update(UpdatedeploymentInformationsAPIRequest $Request,$id)
    {
       $deploymentInformations = $this->service->update($Request->all(),$id);
       return $this->sendResponse($deploymentInformations->toArray(), 'deploymentInformations actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'deploymentInformations eliminado correctamente');
    }

    
}

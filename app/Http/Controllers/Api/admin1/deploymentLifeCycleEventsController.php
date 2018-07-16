<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\deploymentLifeCycleEvents;
use App\Http\Requests\CreatedeploymentLifeCycleEventsAPIRequest;
use App\Http\Requests\UpdatedeploymentLifeCycleEventsAPIRequest;
use App\Http\service\admin1\deploymentLifeCycleEventsService;
use App\Http\Controllers\AppBaseController;

class deploymentLifeCycleEventsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new deploymentLifeCycleEventsService(); 
    }
    public function store(CreatedeploymentLifeCycleEventsAPIRequest $Request)
    { 
      $deploymentLifeCycleEvents = $this->service->create($Request->all());
      return $this->sendResponse($deploymentLifeCycleEvents->toArray(), 'deploymentLifeCycleEvents guardado exitosamente');
    }
    public function update(UpdatedeploymentLifeCycleEventsAPIRequest $Request,$id)
    {
       $deploymentLifeCycleEvents = $this->service->update($Request->all(),$id);
       return $this->sendResponse($deploymentLifeCycleEvents->toArray(), 'deploymentLifeCycleEvents actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'deploymentLifeCycleEvents eliminado correctamente');
    }

    
}

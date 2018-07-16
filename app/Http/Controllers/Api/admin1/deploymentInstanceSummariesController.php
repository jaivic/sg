<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\deploymentInstanceSummaries;
use App\Http\Requests\CreatedeploymentInstanceSummariesAPIRequest;
use App\Http\Requests\UpdatedeploymentInstanceSummariesAPIRequest;
use App\Http\service\admin1\deploymentInstanceSummariesService;
use App\Http\Controllers\AppBaseController;

class deploymentInstanceSummariesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new deploymentInstanceSummariesService(); 
    }
    public function store(CreatedeploymentInstanceSummariesAPIRequest $Request)
    { 
      $deploymentInstanceSummaries = $this->service->create($Request->all());
      return $this->sendResponse($deploymentInstanceSummaries->toArray(), 'deploymentInstanceSummaries guardado exitosamente');
    }
    public function update(UpdatedeploymentInstanceSummariesAPIRequest $Request,$id)
    {
       $deploymentInstanceSummaries = $this->service->update($Request->all(),$id);
       return $this->sendResponse($deploymentInstanceSummaries->toArray(), 'deploymentInstanceSummaries actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'deploymentInstanceSummaries eliminado correctamente');
    }

    
}

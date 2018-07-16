<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\workflows;
use App\Http\Requests\CreateworkflowsAPIRequest;
use App\Http\Requests\UpdateworkflowsAPIRequest;
use App\Http\service\admin1\workflowsService;
use App\Http\Controllers\AppBaseController;

class workflowsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new workflowsService(); 
    }
    public function store(CreateworkflowsAPIRequest $Request)
    { 
      $workflows = $this->service->create($Request->all());
      return $this->sendResponse($workflows->toArray(), 'workflows guardado exitosamente');
    }
    public function update(UpdateworkflowsAPIRequest $Request,$id)
    {
       $workflows = $this->service->update($Request->all(),$id);
       return $this->sendResponse($workflows->toArray(), 'workflows actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'workflows eliminado correctamente');
    }

    
}

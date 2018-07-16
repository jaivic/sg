<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\instances;
use App\Http\Requests\CreateinstancesAPIRequest;
use App\Http\Requests\UpdateinstancesAPIRequest;
use App\Http\service\admin1\instancesService;
use App\Http\Controllers\AppBaseController;

class instancesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new instancesService(); 
    }
    public function store(CreateinstancesAPIRequest $Request)
    { 
      $instances = $this->service->create($Request->all());
      return $this->sendResponse($instances->toArray(), 'instances guardado exitosamente');
    }
    public function update(UpdateinstancesAPIRequest $Request,$id)
    {
       $instances = $this->service->update($Request->all(),$id);
       return $this->sendResponse($instances->toArray(), 'instances actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'instances eliminado correctamente');
    }

    
}

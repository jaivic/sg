<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\environments;
use App\Http\Requests\CreateenvironmentsAPIRequest;
use App\Http\Requests\UpdateenvironmentsAPIRequest;
use App\Http\service\admin1\environmentsService;
use App\Http\Controllers\AppBaseController;

class environmentsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new environmentsService(); 
    }
    public function store(CreateenvironmentsAPIRequest $Request)
    { 
      $environments = $this->service->create($Request->all());
      return $this->sendResponse($environments->toArray(), 'environments guardado exitosamente');
    }
    public function update(UpdateenvironmentsAPIRequest $Request,$id)
    {
       $environments = $this->service->update($Request->all(),$id);
       return $this->sendResponse($environments->toArray(), 'environments actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'environments eliminado correctamente');
    }

    
}

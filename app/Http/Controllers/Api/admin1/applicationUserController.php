<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\applicationUser;
use App\Http\Requests\CreateapplicationUserAPIRequest;
use App\Http\Requests\UpdateapplicationUserAPIRequest;
use App\Http\service\admin1\applicationUserService;
use App\Http\Controllers\AppBaseController;

class applicationUserController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new applicationUserService(); 
    }
    public function store(CreateapplicationUserAPIRequest $Request)
    { 
      $applicationUser = $this->service->create($Request->all());
      return $this->sendResponse($applicationUser->toArray(), 'applicationUser guardado exitosamente');
    }
    public function update(UpdateapplicationUserAPIRequest $Request,$id)
    {
       $applicationUser = $this->service->update($Request->all(),$id);
       return $this->sendResponse($applicationUser->toArray(), 'applicationUser actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'applicationUser eliminado correctamente');
    }

    
}

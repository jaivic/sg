<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\roleUser;
use App\Http\Requests\CreateroleUserAPIRequest;
use App\Http\Requests\UpdateroleUserAPIRequest;
use App\Http\service\admin1\roleUserService;
use App\Http\Controllers\AppBaseController;

class roleUserController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new roleUserService(); 
    }
    public function store(CreateroleUserAPIRequest $Request)
    { 
      $roleUser = $this->service->create($Request->all());
      return $this->sendResponse($roleUser->toArray(), 'roleUser guardado exitosamente');
    }
    public function update(UpdateroleUserAPIRequest $Request,$id)
    {
       $roleUser = $this->service->update($Request->all(),$id);
       return $this->sendResponse($roleUser->toArray(), 'roleUser actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'roleUser eliminado correctamente');
    }

    
}

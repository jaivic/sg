<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\permissions;
use App\Http\Requests\CreatepermissionsAPIRequest;
use App\Http\Requests\UpdatepermissionsAPIRequest;
use App\Http\service\admin1\permissionsService;
use App\Http\Controllers\AppBaseController;

class permissionsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new permissionsService(); 
    }
    public function store(CreatepermissionsAPIRequest $Request)
    { 
      $permissions = $this->service->create($Request->all());
      return $this->sendResponse($permissions->toArray(), 'permissions guardado exitosamente');
    }
    public function update(UpdatepermissionsAPIRequest $Request,$id)
    {
       $permissions = $this->service->update($Request->all(),$id);
       return $this->sendResponse($permissions->toArray(), 'permissions actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'permissions eliminado correctamente');
    }

    
}

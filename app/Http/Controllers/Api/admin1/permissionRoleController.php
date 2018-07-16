<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\permissionRole;
use App\Http\Requests\CreatepermissionRoleAPIRequest;
use App\Http\Requests\UpdatepermissionRoleAPIRequest;
use App\Http\service\admin1\permissionRoleService;
use App\Http\Controllers\AppBaseController;

class permissionRoleController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new permissionRoleService(); 
    }
    public function store(CreatepermissionRoleAPIRequest $Request)
    { 
      $permissionRole = $this->service->create($Request->all());
      return $this->sendResponse($permissionRole->toArray(), 'permissionRole guardado exitosamente');
    }
    public function update(UpdatepermissionRoleAPIRequest $Request,$id)
    {
       $permissionRole = $this->service->update($Request->all(),$id);
       return $this->sendResponse($permissionRole->toArray(), 'permissionRole actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'permissionRole eliminado correctamente');
    }

    
}

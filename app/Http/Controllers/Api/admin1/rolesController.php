<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\roles;
use App\Http\Requests\CreaterolesAPIRequest;
use App\Http\Requests\UpdaterolesAPIRequest;
use App\Http\service\admin1\rolesService;
use App\Http\Controllers\AppBaseController;

class rolesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new rolesService(); 
    }
    public function store(CreaterolesAPIRequest $Request)
    { 
      $roles = $this->service->create($Request->all());
      return $this->sendResponse($roles->toArray(), 'roles guardado exitosamente');
    }
    public function update(UpdaterolesAPIRequest $Request,$id)
    {
       $roles = $this->service->update($Request->all(),$id);
       return $this->sendResponse($roles->toArray(), 'roles actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'roles eliminado correctamente');
    }

    
}

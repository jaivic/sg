<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\users;
use App\Http\Requests\CreateusersAPIRequest;
use App\Http\Requests\UpdateusersAPIRequest;
use App\Http\service\admin1\usersService;
use App\Http\Controllers\AppBaseController;

class usersController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new usersService(); 
    }
    public function store(CreateusersAPIRequest $Request)
    { 
      $users = $this->service->create($Request->all());
      return $this->sendResponse($users->toArray(), 'users guardado exitosamente');
    }
    public function update(UpdateusersAPIRequest $Request,$id)
    {
       $users = $this->service->update($Request->all(),$id);
       return $this->sendResponse($users->toArray(), 'users actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'users eliminado correctamente');
    }

    
}

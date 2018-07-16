<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\mailingLists;
use App\Http\Requests\CreatemailingListsAPIRequest;
use App\Http\Requests\UpdatemailingListsAPIRequest;
use App\Http\service\admin1\mailingListsService;
use App\Http\Controllers\AppBaseController;

class mailingListsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mailingListsService(); 
    }
    public function store(CreatemailingListsAPIRequest $Request)
    { 
      $mailingLists = $this->service->create($Request->all());
      return $this->sendResponse($mailingLists->toArray(), 'mailingLists guardado exitosamente');
    }
    public function update(UpdatemailingListsAPIRequest $Request,$id)
    {
       $mailingLists = $this->service->update($Request->all(),$id);
       return $this->sendResponse($mailingLists->toArray(), 'mailingLists actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'mailingLists eliminado correctamente');
    }

    
}

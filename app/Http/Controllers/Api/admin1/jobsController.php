<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\jobs;
use App\Http\Requests\CreatejobsAPIRequest;
use App\Http\Requests\UpdatejobsAPIRequest;
use App\Http\service\admin1\jobsService;
use App\Http\Controllers\AppBaseController;

class jobsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new jobsService(); 
    }
    public function store(CreatejobsAPIRequest $Request)
    { 
      $jobs = $this->service->create($Request->all());
      return $this->sendResponse($jobs->toArray(), 'jobs guardado exitosamente');
    }
    public function update(UpdatejobsAPIRequest $Request,$id)
    {
       $jobs = $this->service->update($Request->all(),$id);
       return $this->sendResponse($jobs->toArray(), 'jobs actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'jobs eliminado correctamente');
    }

    
}

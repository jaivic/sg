<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\jenkinsBuilds;
use App\Http\Requests\CreatejenkinsBuildsAPIRequest;
use App\Http\Requests\UpdatejenkinsBuildsAPIRequest;
use App\Http\service\admin1\jenkinsBuildsService;
use App\Http\Controllers\AppBaseController;

class jenkinsBuildsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new jenkinsBuildsService(); 
    }
    public function store(CreatejenkinsBuildsAPIRequest $Request)
    { 
      $jenkinsBuilds = $this->service->create($Request->all());
      return $this->sendResponse($jenkinsBuilds->toArray(), 'jenkinsBuilds guardado exitosamente');
    }
    public function update(UpdatejenkinsBuildsAPIRequest $Request,$id)
    {
       $jenkinsBuilds = $this->service->update($Request->all(),$id);
       return $this->sendResponse($jenkinsBuilds->toArray(), 'jenkinsBuilds actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'jenkinsBuilds eliminado correctamente');
    }

    
}

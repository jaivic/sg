<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\stressTests;
use App\Http\Requests\CreatestressTestsAPIRequest;
use App\Http\Requests\UpdatestressTestsAPIRequest;
use App\Http\service\admin1\stressTestsService;
use App\Http\Controllers\AppBaseController;

class stressTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new stressTestsService(); 
    }
    public function store(CreatestressTestsAPIRequest $Request)
    { 
      $stressTests = $this->service->create($Request->all());
      return $this->sendResponse($stressTests->toArray(), 'stressTests guardado exitosamente');
    }
    public function update(UpdatestressTestsAPIRequest $Request,$id)
    {
       $stressTests = $this->service->update($Request->all(),$id);
       return $this->sendResponse($stressTests->toArray(), 'stressTests actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'stressTests eliminado correctamente');
    }

    
}

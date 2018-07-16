<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\qualityTests;
use App\Http\Requests\CreatequalityTestsAPIRequest;
use App\Http\Requests\UpdatequalityTestsAPIRequest;
use App\Http\service\admin1\qualityTestsService;
use App\Http\Controllers\AppBaseController;

class qualityTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new qualityTestsService(); 
    }
    public function store(CreatequalityTestsAPIRequest $Request)
    { 
      $qualityTests = $this->service->create($Request->all());
      return $this->sendResponse($qualityTests->toArray(), 'qualityTests guardado exitosamente');
    }
    public function update(UpdatequalityTestsAPIRequest $Request,$id)
    {
       $qualityTests = $this->service->update($Request->all(),$id);
       return $this->sendResponse($qualityTests->toArray(), 'qualityTests actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'qualityTests eliminado correctamente');
    }

    
}

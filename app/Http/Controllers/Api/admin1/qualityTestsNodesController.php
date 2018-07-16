<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\qualityTestsNodes;
use App\Http\Requests\CreatequalityTestsNodesAPIRequest;
use App\Http\Requests\UpdatequalityTestsNodesAPIRequest;
use App\Http\service\admin1\qualityTestsNodesService;
use App\Http\Controllers\AppBaseController;

class qualityTestsNodesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new qualityTestsNodesService(); 
    }
    public function store(CreatequalityTestsNodesAPIRequest $Request)
    { 
      $qualityTestsNodes = $this->service->create($Request->all());
      return $this->sendResponse($qualityTestsNodes->toArray(), 'qualityTestsNodes guardado exitosamente');
    }
    public function update(UpdatequalityTestsNodesAPIRequest $Request,$id)
    {
       $qualityTestsNodes = $this->service->update($Request->all(),$id);
       return $this->sendResponse($qualityTestsNodes->toArray(), 'qualityTestsNodes actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'qualityTestsNodes eliminado correctamente');
    }

    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\retentions;
use App\Http\Requests\CreateretentionsAPIRequest;
use App\Http\Requests\UpdateretentionsAPIRequest;
use App\Http\service\admin1\retentionsService;
use App\Http\Controllers\AppBaseController;

class retentionsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new retentionsService(); 
    }
    public function store(CreateretentionsAPIRequest $Request)
    { 
      $retentions = $this->service->create($Request->all());
      return $this->sendResponse($retentions->toArray(), 'retentions guardado exitosamente');
    }
    public function update(UpdateretentionsAPIRequest $Request,$id)
    {
       $retentions = $this->service->update($Request->all(),$id);
       return $this->sendResponse($retentions->toArray(), 'retentions actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'retentions eliminado correctamente');
    }

    
}

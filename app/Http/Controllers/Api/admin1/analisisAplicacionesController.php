<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\analisisAplicaciones;
use App\Http\Requests\CreateanalisisAplicacionesAPIRequest;
use App\Http\Requests\UpdateanalisisAplicacionesAPIRequest;
use App\Http\service\admin1\analisisAplicacionesService;
use App\Http\Controllers\AppBaseController;

class analisisAplicacionesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new analisisAplicacionesService(); 
    }
    public function store(CreateanalisisAplicacionesAPIRequest $Request)
    { 
      $analisisAplicaciones = $this->service->create($Request->all());
      return $this->sendResponse($analisisAplicaciones->toArray(), 'analisisAplicaciones guardado exitosamente');
    }
    public function update(UpdateanalisisAplicacionesAPIRequest $Request,$id)
    {
       $analisisAplicaciones = $this->service->update($Request->all(),$id);
       return $this->sendResponse($analisisAplicaciones->toArray(), 'analisisAplicaciones actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'analisisAplicaciones eliminado correctamente');
    }

    
}

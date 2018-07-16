<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\analisisAplicacionesPromediosMensuales;
use App\Http\Requests\CreateanalisisAplicacionesPromediosMensualesAPIRequest;
use App\Http\Requests\UpdateanalisisAplicacionesPromediosMensualesAPIRequest;
use App\Http\service\admin1\analisisAplicacionesPromediosMensualesService;
use App\Http\Controllers\AppBaseController;

class analisisAplicacionesPromediosMensualesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new analisisAplicacionesPromediosMensualesService(); 
    }
    public function store(CreateanalisisAplicacionesPromediosMensualesAPIRequest $Request)
    { 
      $analisisAplicacionesPromediosMensuales = $this->service->create($Request->all());
      return $this->sendResponse($analisisAplicacionesPromediosMensuales->toArray(), 'analisisAplicacionesPromediosMensuales guardado exitosamente');
    }
    public function update(UpdateanalisisAplicacionesPromediosMensualesAPIRequest $Request,$id)
    {
       $analisisAplicacionesPromediosMensuales = $this->service->update($Request->all(),$id);
       return $this->sendResponse($analisisAplicacionesPromediosMensuales->toArray(), 'analisisAplicacionesPromediosMensuales actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'analisisAplicacionesPromediosMensuales eliminado correctamente');
    }

    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\analisisAplicacionesPromedios;
use App\Http\Requests\CreateanalisisAplicacionesPromediosAPIRequest;
use App\Http\Requests\UpdateanalisisAplicacionesPromediosAPIRequest;
use App\Http\service\admin1\analisisAplicacionesPromediosService;
use App\Http\Controllers\AppBaseController;

class analisisAplicacionesPromediosController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new analisisAplicacionesPromediosService(); 
    }
    public function store(CreateanalisisAplicacionesPromediosAPIRequest $Request)
    { 
      $analisisAplicacionesPromedios = $this->service->create($Request->all());
      return $this->sendResponse($analisisAplicacionesPromedios->toArray(), 'analisisAplicacionesPromedios guardado exitosamente');
    }
    public function update(UpdateanalisisAplicacionesPromediosAPIRequest $Request,$id)
    {
       $analisisAplicacionesPromedios = $this->service->update($Request->all(),$id);
       return $this->sendResponse($analisisAplicacionesPromedios->toArray(), 'analisisAplicacionesPromedios actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'analisisAplicacionesPromedios eliminado correctamente');
    }

    
}

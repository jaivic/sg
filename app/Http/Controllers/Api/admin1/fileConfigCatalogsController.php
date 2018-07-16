<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\fileConfigCatalogs;
use App\Http\Requests\CreatefileConfigCatalogsAPIRequest;
use App\Http\Requests\UpdatefileConfigCatalogsAPIRequest;
use App\Http\service\admin1\fileConfigCatalogsService;
use App\Http\Controllers\AppBaseController;

class fileConfigCatalogsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new fileConfigCatalogsService(); 
    }
    public function store(CreatefileConfigCatalogsAPIRequest $Request)
    { 
      $fileConfigCatalogs = $this->service->create($Request->all());
      return $this->sendResponse($fileConfigCatalogs->toArray(), 'fileConfigCatalogs guardado exitosamente');
    }
    public function update(UpdatefileConfigCatalogsAPIRequest $Request,$id)
    {
       $fileConfigCatalogs = $this->service->update($Request->all(),$id);
       return $this->sendResponse($fileConfigCatalogs->toArray(), 'fileConfigCatalogs actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'fileConfigCatalogs eliminado correctamente');
    }

    
}

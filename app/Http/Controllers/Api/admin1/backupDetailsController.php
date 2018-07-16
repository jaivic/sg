<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\backupDetails;
use App\Http\Requests\CreatebackupDetailsAPIRequest;
use App\Http\Requests\UpdatebackupDetailsAPIRequest;
use App\Http\service\admin1\backupDetailsService;
use App\Http\Controllers\AppBaseController;

class backupDetailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupDetailsService(); 
    }
    public function store(CreatebackupDetailsAPIRequest $Request)
    { 
      $backupDetails = $this->service->create($Request->all());
      return $this->sendResponse($backupDetails->toArray(), 'backupDetails guardado exitosamente');
    }
    public function update(UpdatebackupDetailsAPIRequest $Request,$id)
    {
       $backupDetails = $this->service->update($Request->all(),$id);
       return $this->sendResponse($backupDetails->toArray(), 'backupDetails actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'backupDetails eliminado correctamente');
    }

    
}

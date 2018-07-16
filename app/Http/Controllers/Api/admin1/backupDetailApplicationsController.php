<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\backupDetailApplications;
use App\Http\Requests\CreatebackupDetailApplicationsAPIRequest;
use App\Http\Requests\UpdatebackupDetailApplicationsAPIRequest;
use App\Http\service\admin1\backupDetailApplicationsService;
use App\Http\Controllers\AppBaseController;

class backupDetailApplicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupDetailApplicationsService(); 
    }
    public function store(CreatebackupDetailApplicationsAPIRequest $Request)
    { 
      $backupDetailApplications = $this->service->create($Request->all());
      return $this->sendResponse($backupDetailApplications->toArray(), 'backupDetailApplications guardado exitosamente');
    }
    public function update(UpdatebackupDetailApplicationsAPIRequest $Request,$id)
    {
       $backupDetailApplications = $this->service->update($Request->all(),$id);
       return $this->sendResponse($backupDetailApplications->toArray(), 'backupDetailApplications actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'backupDetailApplications eliminado correctamente');
    }

    
}

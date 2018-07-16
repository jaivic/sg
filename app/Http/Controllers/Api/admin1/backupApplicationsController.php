<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\backupApplications;
use App\Http\Requests\CreatebackupApplicationsAPIRequest;
use App\Http\Requests\UpdatebackupApplicationsAPIRequest;
use App\Http\service\admin1\backupApplicationsService;
use App\Http\Controllers\AppBaseController;

class backupApplicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupApplicationsService(); 
    }
    public function store(CreatebackupApplicationsAPIRequest $Request)
    { 
      $backupApplications = $this->service->create($Request->all());
      return $this->sendResponse($backupApplications->toArray(), 'backupApplications guardado exitosamente');
    }
    public function update(UpdatebackupApplicationsAPIRequest $Request,$id)
    {
       $backupApplications = $this->service->update($Request->all(),$id);
       return $this->sendResponse($backupApplications->toArray(), 'backupApplications actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'backupApplications eliminado correctamente');
    }

    
}

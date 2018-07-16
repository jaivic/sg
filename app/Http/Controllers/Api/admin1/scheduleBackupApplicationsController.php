<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\scheduleBackupApplications;
use App\Http\Requests\CreatescheduleBackupApplicationsAPIRequest;
use App\Http\Requests\UpdatescheduleBackupApplicationsAPIRequest;
use App\Http\service\admin1\scheduleBackupApplicationsService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupApplicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupApplicationsService(); 
    }
    public function store(CreatescheduleBackupApplicationsAPIRequest $Request)
    { 
      $scheduleBackupApplications = $this->service->create($Request->all());
      return $this->sendResponse($scheduleBackupApplications->toArray(), 'scheduleBackupApplications guardado exitosamente');
    }
    public function update(UpdatescheduleBackupApplicationsAPIRequest $Request,$id)
    {
       $scheduleBackupApplications = $this->service->update($Request->all(),$id);
       return $this->sendResponse($scheduleBackupApplications->toArray(), 'scheduleBackupApplications actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'scheduleBackupApplications eliminado correctamente');
    }

    
}

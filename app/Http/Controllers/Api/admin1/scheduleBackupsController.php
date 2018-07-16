<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\scheduleBackups;
use App\Http\Requests\CreatescheduleBackupsAPIRequest;
use App\Http\Requests\UpdatescheduleBackupsAPIRequest;
use App\Http\service\admin1\scheduleBackupsService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupsService(); 
    }
    public function store(CreatescheduleBackupsAPIRequest $Request)
    { 
      $scheduleBackups = $this->service->create($Request->all());
      return $this->sendResponse($scheduleBackups->toArray(), 'scheduleBackups guardado exitosamente');
    }
    public function update(UpdatescheduleBackupsAPIRequest $Request,$id)
    {
       $scheduleBackups = $this->service->update($Request->all(),$id);
       return $this->sendResponse($scheduleBackups->toArray(), 'scheduleBackups actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'scheduleBackups eliminado correctamente');
    }

    
}

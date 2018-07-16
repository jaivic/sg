<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\scheduleBackupDatabases;
use App\Http\Requests\CreatescheduleBackupDatabasesAPIRequest;
use App\Http\Requests\UpdatescheduleBackupDatabasesAPIRequest;
use App\Http\service\admin1\scheduleBackupDatabasesService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupDatabasesService(); 
    }
    public function store(CreatescheduleBackupDatabasesAPIRequest $Request)
    { 
      $scheduleBackupDatabases = $this->service->create($Request->all());
      return $this->sendResponse($scheduleBackupDatabases->toArray(), 'scheduleBackupDatabases guardado exitosamente');
    }
    public function update(UpdatescheduleBackupDatabasesAPIRequest $Request,$id)
    {
       $scheduleBackupDatabases = $this->service->update($Request->all(),$id);
       return $this->sendResponse($scheduleBackupDatabases->toArray(), 'scheduleBackupDatabases actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'scheduleBackupDatabases eliminado correctamente');
    }

    
}

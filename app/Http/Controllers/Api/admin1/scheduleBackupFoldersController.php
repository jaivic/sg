<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\scheduleBackupFolders;
use App\Http\Requests\CreatescheduleBackupFoldersAPIRequest;
use App\Http\Requests\UpdatescheduleBackupFoldersAPIRequest;
use App\Http\service\admin1\scheduleBackupFoldersService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupFoldersController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupFoldersService(); 
    }
    public function store(CreatescheduleBackupFoldersAPIRequest $Request)
    { 
      $scheduleBackupFolders = $this->service->create($Request->all());
      return $this->sendResponse($scheduleBackupFolders->toArray(), 'scheduleBackupFolders guardado exitosamente');
    }
    public function update(UpdatescheduleBackupFoldersAPIRequest $Request,$id)
    {
       $scheduleBackupFolders = $this->service->update($Request->all(),$id);
       return $this->sendResponse($scheduleBackupFolders->toArray(), 'scheduleBackupFolders actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'scheduleBackupFolders eliminado correctamente');
    }

    
}

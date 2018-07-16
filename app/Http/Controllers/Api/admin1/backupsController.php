<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\backups;
use App\Http\Requests\CreatebackupsAPIRequest;
use App\Http\Requests\UpdatebackupsAPIRequest;
use App\Http\service\admin1\backupsService;
use App\Http\Controllers\AppBaseController;

class backupsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupsService(); 
    }
    public function store(CreatebackupsAPIRequest $Request)
    { 
      $backups = $this->service->create($Request->all());
      return $this->sendResponse($backups->toArray(), 'backups guardado exitosamente');
    }
    public function update(UpdatebackupsAPIRequest $Request,$id)
    {
       $backups = $this->service->update($Request->all(),$id);
       return $this->sendResponse($backups->toArray(), 'backups actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'backups eliminado correctamente');
    }

    
}

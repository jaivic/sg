<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\backupReportePoliticas;
use App\Http\Requests\CreatebackupReportePoliticasAPIRequest;
use App\Http\Requests\UpdatebackupReportePoliticasAPIRequest;
use App\Http\service\admin1\backupReportePoliticasService;
use App\Http\Controllers\AppBaseController;

class backupReportePoliticasController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupReportePoliticasService(); 
    }
    public function store(CreatebackupReportePoliticasAPIRequest $Request)
    { 
      $backupReportePoliticas = $this->service->create($Request->all());
      return $this->sendResponse($backupReportePoliticas->toArray(), 'backupReportePoliticas guardado exitosamente');
    }
    public function update(UpdatebackupReportePoliticasAPIRequest $Request,$id)
    {
       $backupReportePoliticas = $this->service->update($Request->all(),$id);
       return $this->sendResponse($backupReportePoliticas->toArray(), 'backupReportePoliticas actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'backupReportePoliticas eliminado correctamente');
    }

    
}

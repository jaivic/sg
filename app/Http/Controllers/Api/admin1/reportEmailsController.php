<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\reportEmails;
use App\Http\Requests\CreatereportEmailsAPIRequest;
use App\Http\Requests\UpdatereportEmailsAPIRequest;
use App\Http\service\admin1\reportEmailsService;
use App\Http\Controllers\AppBaseController;

class reportEmailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new reportEmailsService(); 
    }
    public function store(CreatereportEmailsAPIRequest $Request)
    { 
      $reportEmails = $this->service->create($Request->all());
      return $this->sendResponse($reportEmails->toArray(), 'reportEmails guardado exitosamente');
    }
    public function update(UpdatereportEmailsAPIRequest $Request,$id)
    {
       $reportEmails = $this->service->update($Request->all(),$id);
       return $this->sendResponse($reportEmails->toArray(), 'reportEmails actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'reportEmails eliminado correctamente');
    }

    
}

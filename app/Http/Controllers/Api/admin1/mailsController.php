<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\mails;
use App\Http\Requests\CreatemailsAPIRequest;
use App\Http\Requests\UpdatemailsAPIRequest;
use App\Http\service\admin1\mailsService;
use App\Http\Controllers\AppBaseController;

class mailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mailsService(); 
    }
    public function store(CreatemailsAPIRequest $Request)
    { 
      $mails = $this->service->create($Request->all());
      return $this->sendResponse($mails->toArray(), 'mails guardado exitosamente');
    }
    public function update(UpdatemailsAPIRequest $Request,$id)
    {
       $mails = $this->service->update($Request->all(),$id);
       return $this->sendResponse($mails->toArray(), 'mails actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'mails eliminado correctamente');
    }

    
}

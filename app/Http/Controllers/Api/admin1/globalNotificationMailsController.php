<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\globalNotificationMails;
use App\Http\Requests\CreateglobalNotificationMailsAPIRequest;
use App\Http\Requests\UpdateglobalNotificationMailsAPIRequest;
use App\Http\service\admin1\globalNotificationMailsService;
use App\Http\Controllers\AppBaseController;

class globalNotificationMailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new globalNotificationMailsService(); 
    }
    public function store(CreateglobalNotificationMailsAPIRequest $Request)
    { 
      $globalNotificationMails = $this->service->create($Request->all());
      return $this->sendResponse($globalNotificationMails->toArray(), 'globalNotificationMails guardado exitosamente');
    }
    public function update(UpdateglobalNotificationMailsAPIRequest $Request,$id)
    {
       $globalNotificationMails = $this->service->update($Request->all(),$id);
       return $this->sendResponse($globalNotificationMails->toArray(), 'globalNotificationMails actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'globalNotificationMails eliminado correctamente');
    }

    
}

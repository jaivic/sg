<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\slackChannels;
use App\Http\Requests\CreateslackChannelsAPIRequest;
use App\Http\Requests\UpdateslackChannelsAPIRequest;
use App\Http\service\admin1\slackChannelsService;
use App\Http\Controllers\AppBaseController;

class slackChannelsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new slackChannelsService(); 
    }
    public function store(CreateslackChannelsAPIRequest $Request)
    { 
      $slackChannels = $this->service->create($Request->all());
      return $this->sendResponse($slackChannels->toArray(), 'slackChannels guardado exitosamente');
    }
    public function update(UpdateslackChannelsAPIRequest $Request,$id)
    {
       $slackChannels = $this->service->update($Request->all(),$id);
       return $this->sendResponse($slackChannels->toArray(), 'slackChannels actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'slackChannels eliminado correctamente');
    }

    
}

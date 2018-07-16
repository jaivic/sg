<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\ticketStatistics;
use App\Http\Requests\CreateticketStatisticsAPIRequest;
use App\Http\Requests\UpdateticketStatisticsAPIRequest;
use App\Http\service\admin1\ticketStatisticsService;
use App\Http\Controllers\AppBaseController;

class ticketStatisticsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketStatisticsService(); 
    }
    public function store(CreateticketStatisticsAPIRequest $Request)
    { 
      $ticketStatistics = $this->service->create($Request->all());
      return $this->sendResponse($ticketStatistics->toArray(), 'ticketStatistics guardado exitosamente');
    }
    public function update(UpdateticketStatisticsAPIRequest $Request,$id)
    {
       $ticketStatistics = $this->service->update($Request->all(),$id);
       return $this->sendResponse($ticketStatistics->toArray(), 'ticketStatistics actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'ticketStatistics eliminado correctamente');
    }

    
}

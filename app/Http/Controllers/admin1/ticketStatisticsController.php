<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketStatistics;
use App\Http\Requests\CreateticketStatisticsRequest;
use App\Http\Requests\UpdateticketStatisticsRequest;
use App\Http\service\admin1\ticketStatisticsService;
use App\Http\Controllers\AppBaseController;

class ticketStatisticsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketStatisticsService(); 
    }
    public function index()
    {
      $ticketStatistics = ticketStatistics::all();
      return view('admin1.ticketStatistics.index',compact("ticketStatistics"));
    }
    public function create(){
      return view('admin1.ticketStatistics.create');
    }
    public function edit($id){
      $ticketStatistics = ticketStatistics::find($id);
      return view('admin1.ticketStatistics.edit',compact("ticketStatistics"));
    }
     public function show($id){
        $ticketStatistics = ticketStatistics::find($id);
        return view('admin1.ticketStatistics.show',compact("ticketStatistics"));
    }
    public function store(CreateticketStatisticsRequest $request)
    { 
        $ticketStatistics = $this->service->create($request->all());
        return redirect("ticketstatistics/edit/$ticketStatistics->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketStatisticsRequest $request,$id)
    {
        $ticketStatistics = $this->service->update($request->all(),$id);
        return redirect("ticketstatistics/edit/$ticketStatistics->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketstatistics/index")->with('status', 'Cambios agregada correctamente');
    }  
}

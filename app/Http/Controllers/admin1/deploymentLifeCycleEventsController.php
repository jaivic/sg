<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\deploymentLifeCycleEvents;
use App\Http\Requests\CreatedeploymentLifeCycleEventsRequest;
use App\Http\Requests\UpdatedeploymentLifeCycleEventsRequest;
use App\Http\service\admin1\deploymentLifeCycleEventsService;
use App\Http\Controllers\AppBaseController;

class deploymentLifeCycleEventsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new deploymentLifeCycleEventsService(); 
    }
    public function index()
    {
      $deploymentLifeCycleEvents = deploymentLifeCycleEvents::all();
      return view('admin1.deploymentLifeCycleEvents.index',compact("deploymentLifeCycleEvents"));
    }
    public function create(){
      return view('admin1.deploymentLifeCycleEvents.create');
    }
    public function edit($id){
      $deploymentLifeCycleEvents = deploymentLifeCycleEvents::find($id);
      return view('admin1.deploymentLifeCycleEvents.edit',compact("deploymentLifeCycleEvents"));
    }
     public function show($id){
        $deploymentLifeCycleEvents = deploymentLifeCycleEvents::find($id);
        return view('admin1.deploymentLifeCycleEvents.show',compact("deploymentLifeCycleEvents"));
    }
    public function store(CreatedeploymentLifeCycleEventsRequest $request)
    { 
        $deploymentLifeCycleEvents = $this->service->create($request->all());
        return redirect("deploymentlifecycleevents/edit/$deploymentLifeCycleEvents->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatedeploymentLifeCycleEventsRequest $request,$id)
    {
        $deploymentLifeCycleEvents = $this->service->update($request->all(),$id);
        return redirect("deploymentlifecycleevents/edit/$deploymentLifeCycleEvents->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("deploymentlifecycleevents/index")->with('status', 'Cambios agregada correctamente');
    }  
}

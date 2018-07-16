<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\deploymentInstanceSummaries;
use App\Http\Requests\CreatedeploymentInstanceSummariesRequest;
use App\Http\Requests\UpdatedeploymentInstanceSummariesRequest;
use App\Http\service\admin1\deploymentInstanceSummariesService;
use App\Http\Controllers\AppBaseController;

class deploymentInstanceSummariesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new deploymentInstanceSummariesService(); 
    }
    public function index()
    {
      $deploymentInstanceSummaries = deploymentInstanceSummaries::all();
      return view('admin1.deploymentInstanceSummaries.index',compact("deploymentInstanceSummaries"));
    }
    public function create(){
      return view('admin1.deploymentInstanceSummaries.create');
    }
    public function edit($id){
      $deploymentInstanceSummaries = deploymentInstanceSummaries::find($id);
      return view('admin1.deploymentInstanceSummaries.edit',compact("deploymentInstanceSummaries"));
    }
     public function show($id){
        $deploymentInstanceSummaries = deploymentInstanceSummaries::find($id);
        return view('admin1.deploymentInstanceSummaries.show',compact("deploymentInstanceSummaries"));
    }
    public function store(CreatedeploymentInstanceSummariesRequest $request)
    { 
        $deploymentInstanceSummaries = $this->service->create($request->all());
        return redirect("deploymentinstancesummaries/edit/$deploymentInstanceSummaries->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatedeploymentInstanceSummariesRequest $request,$id)
    {
        $deploymentInstanceSummaries = $this->service->update($request->all(),$id);
        return redirect("deploymentinstancesummaries/edit/$deploymentInstanceSummaries->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("deploymentinstancesummaries/index")->with('status', 'Cambios agregada correctamente');
    }  
}

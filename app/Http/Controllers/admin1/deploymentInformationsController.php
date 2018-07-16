<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\deploymentInformations;
use App\Http\Requests\CreatedeploymentInformationsRequest;
use App\Http\Requests\UpdatedeploymentInformationsRequest;
use App\Http\service\admin1\deploymentInformationsService;
use App\Http\Controllers\AppBaseController;

class deploymentInformationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new deploymentInformationsService(); 
    }
    public function index()
    {
      $deploymentInformations = deploymentInformations::all();
      return view('admin1.deploymentInformations.index',compact("deploymentInformations"));
    }
    public function create(){
      return view('admin1.deploymentInformations.create');
    }
    public function edit($id){
      $deploymentInformations = deploymentInformations::find($id);
      return view('admin1.deploymentInformations.edit',compact("deploymentInformations"));
    }
     public function show($id){
        $deploymentInformations = deploymentInformations::find($id);
        return view('admin1.deploymentInformations.show',compact("deploymentInformations"));
    }
    public function store(CreatedeploymentInformationsRequest $request)
    { 
        $deploymentInformations = $this->service->create($request->all());
        return redirect("deploymentinformations/edit/$deploymentInformations->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatedeploymentInformationsRequest $request,$id)
    {
        $deploymentInformations = $this->service->update($request->all(),$id);
        return redirect("deploymentinformations/edit/$deploymentInformations->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("deploymentinformations/index")->with('status', 'Cambios agregada correctamente');
    }  
}

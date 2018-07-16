<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\jenkinsBuilds;
use App\Http\Requests\CreatejenkinsBuildsRequest;
use App\Http\Requests\UpdatejenkinsBuildsRequest;
use App\Http\service\admin1\jenkinsBuildsService;
use App\Http\Controllers\AppBaseController;

class jenkinsBuildsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new jenkinsBuildsService(); 
    }
    public function index()
    {
      $jenkinsBuilds = jenkinsBuilds::all();
      return view('admin1.jenkinsBuilds.index',compact("jenkinsBuilds"));
    }
    public function create(){
      return view('admin1.jenkinsBuilds.create');
    }
    public function edit($id){
      $jenkinsBuilds = jenkinsBuilds::find($id);
      return view('admin1.jenkinsBuilds.edit',compact("jenkinsBuilds"));
    }
     public function show($id){
        $jenkinsBuilds = jenkinsBuilds::find($id);
        return view('admin1.jenkinsBuilds.show',compact("jenkinsBuilds"));
    }
    public function store(CreatejenkinsBuildsRequest $request)
    { 
        $jenkinsBuilds = $this->service->create($request->all());
        return redirect("jenkinsbuilds/edit/$jenkinsBuilds->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatejenkinsBuildsRequest $request,$id)
    {
        $jenkinsBuilds = $this->service->update($request->all(),$id);
        return redirect("jenkinsbuilds/edit/$jenkinsBuilds->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("jenkinsbuilds/index")->with('status', 'Cambios agregada correctamente');
    }  
}

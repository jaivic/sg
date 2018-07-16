<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\instances;
use App\Http\Requests\CreateinstancesRequest;
use App\Http\Requests\UpdateinstancesRequest;
use App\Http\service\admin1\instancesService;
use App\Http\Controllers\AppBaseController;

class instancesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new instancesService(); 
    }
    public function index()
    {
      $instances = instances::all();
      return view('admin1.instances.index',compact("instances"));
    }
    public function create(){
      return view('admin1.instances.create');
    }
    public function edit($id){
      $instances = instances::find($id);
      return view('admin1.instances.edit',compact("instances"));
    }
     public function show($id){
        $instances = instances::find($id);
        return view('admin1.instances.show',compact("instances"));
    }
    public function store(CreateinstancesRequest $request)
    { 
        $instances = $this->service->create($request->all());
        return redirect("instances/edit/$instances->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateinstancesRequest $request,$id)
    {
        $instances = $this->service->update($request->all(),$id);
        return redirect("instances/edit/$instances->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("instances/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\environments;
use App\Http\Requests\CreateenvironmentsRequest;
use App\Http\Requests\UpdateenvironmentsRequest;
use App\Http\service\admin1\environmentsService;
use App\Http\Controllers\AppBaseController;

class environmentsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new environmentsService(); 
    }
    public function index()
    {
      $environments = environments::all();
      return view('admin1.environments.index',compact("environments"));
    }
    public function create(){
      return view('admin1.environments.create');
    }
    public function edit($id){
      $environments = environments::find($id);
      return view('admin1.environments.edit',compact("environments"));
    }
     public function show($id){
        $environments = environments::find($id);
        return view('admin1.environments.show',compact("environments"));
    }
    public function store(CreateenvironmentsRequest $request)
    { 
        $environments = $this->service->create($request->all());
        return redirect("environments/edit/$environments->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateenvironmentsRequest $request,$id)
    {
        $environments = $this->service->update($request->all(),$id);
        return redirect("environments/edit/$environments->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("environments/index")->with('status', 'Cambios agregada correctamente');
    }  
}

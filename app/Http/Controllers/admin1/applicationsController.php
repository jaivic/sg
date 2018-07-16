<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\applications;
use App\Http\Requests\CreateapplicationsRequest;
use App\Http\Requests\UpdateapplicationsRequest;
use App\Http\service\admin1\applicationsService;
use App\Http\Controllers\AppBaseController;

class applicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new applicationsService(); 
    }
    public function index()
    {
      $applications = applications::all();
      return view('admin1.applications.index',compact("applications"));
    }
    public function create(){
      return view('admin1.applications.create');
    }
    public function edit($id){
      $applications = applications::find($id);
      return view('admin1.applications.edit',compact("applications"));
    }
     public function show($id){
        $applications = applications::find($id);
        return view('admin1.applications.show',compact("applications"));
    }
    public function store(CreateapplicationsRequest $request)
    { 
        $applications = $this->service->create($request->all());
        return redirect("applications/edit/$applications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateapplicationsRequest $request,$id)
    {
        $applications = $this->service->update($request->all(),$id);
        return redirect("applications/edit/$applications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("applications/index")->with('status', 'Cambios agregada correctamente');
    }  
}

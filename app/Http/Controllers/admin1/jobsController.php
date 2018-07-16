<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\jobs;
use App\Http\Requests\CreatejobsRequest;
use App\Http\Requests\UpdatejobsRequest;
use App\Http\service\admin1\jobsService;
use App\Http\Controllers\AppBaseController;

class jobsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new jobsService(); 
    }
    public function index()
    {
      $jobs = jobs::all();
      return view('admin1.jobs.index',compact("jobs"));
    }
    public function create(){
      return view('admin1.jobs.create');
    }
    public function edit($id){
      $jobs = jobs::find($id);
      return view('admin1.jobs.edit',compact("jobs"));
    }
     public function show($id){
        $jobs = jobs::find($id);
        return view('admin1.jobs.show',compact("jobs"));
    }
    public function store(CreatejobsRequest $request)
    { 
        $jobs = $this->service->create($request->all());
        return redirect("jobs/edit/$jobs->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatejobsRequest $request,$id)
    {
        $jobs = $this->service->update($request->all(),$id);
        return redirect("jobs/edit/$jobs->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("jobs/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\cloudwatchlogdir;
use App\Http\Requests\CreatecloudwatchlogdirRequest;
use App\Http\Requests\UpdatecloudwatchlogdirRequest;
use App\Http\service\admin1\cloudwatchlogdirService;
use App\Http\Controllers\AppBaseController;

class cloudwatchlogdirController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new cloudwatchlogdirService(); 
    }
    public function index()
    {
      $cloudwatchlogdir = cloudwatchlogdir::all();
      return view('admin1.cloudwatchlogdir.index',compact("cloudwatchlogdir"));
    }
    public function create(){
      return view('admin1.cloudwatchlogdir.create');
    }
    public function edit($id){
      $cloudwatchlogdir = cloudwatchlogdir::find($id);
      return view('admin1.cloudwatchlogdir.edit',compact("cloudwatchlogdir"));
    }
     public function show($id){
        $cloudwatchlogdir = cloudwatchlogdir::find($id);
        return view('admin1.cloudwatchlogdir.show',compact("cloudwatchlogdir"));
    }
    public function store(CreatecloudwatchlogdirRequest $request)
    { 
        $cloudwatchlogdir = $this->service->create($request->all());
        return redirect("cloudwatchlogdir/edit/$cloudwatchlogdir->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatecloudwatchlogdirRequest $request,$id)
    {
        $cloudwatchlogdir = $this->service->update($request->all(),$id);
        return redirect("cloudwatchlogdir/edit/$cloudwatchlogdir->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("cloudwatchlogdir/index")->with('status', 'Cambios agregada correctamente');
    }  
}

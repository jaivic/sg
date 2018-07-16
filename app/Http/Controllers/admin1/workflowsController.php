<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\workflows;
use App\Http\Requests\CreateworkflowsRequest;
use App\Http\Requests\UpdateworkflowsRequest;
use App\Http\service\admin1\workflowsService;
use App\Http\Controllers\AppBaseController;

class workflowsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new workflowsService(); 
    }
    public function index()
    {
      $workflows = workflows::all();
      return view('admin1.workflows.index',compact("workflows"));
    }
    public function create(){
      return view('admin1.workflows.create');
    }
    public function edit($id){
      $workflows = workflows::find($id);
      return view('admin1.workflows.edit',compact("workflows"));
    }
     public function show($id){
        $workflows = workflows::find($id);
        return view('admin1.workflows.show',compact("workflows"));
    }
    public function store(CreateworkflowsRequest $request)
    { 
        $workflows = $this->service->create($request->all());
        return redirect("workflows/edit/$workflows->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateworkflowsRequest $request,$id)
    {
        $workflows = $this->service->update($request->all(),$id);
        return redirect("workflows/edit/$workflows->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("workflows/index")->with('status', 'Cambios agregada correctamente');
    }  
}

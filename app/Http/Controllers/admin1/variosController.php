<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\varios;
use App\Http\Requests\CreatevariosRequest;
use App\Http\Requests\UpdatevariosRequest;
use App\Http\service\admin1\variosService;
use App\Http\Controllers\AppBaseController;

class variosController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new variosService(); 
    }
    public function index()
    {
      $varios = varios::all();
      return view('admin1.varios.index',compact("varios"));
    }
    public function create(){
      return view('admin1.varios.create');
    }
    public function edit($id){
      $varios = varios::find($id);
      return view('admin1.varios.edit',compact("varios"));
    }
     public function show($id){
        $varios = varios::find($id);
        return view('admin1.varios.show',compact("varios"));
    }
    public function store(CreatevariosRequest $request)
    { 
        $varios = $this->service->create($request->all());
        return redirect("varios/edit/$varios->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatevariosRequest $request,$id)
    {
        $varios = $this->service->update($request->all(),$id);
        return redirect("varios/edit/$varios->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("varios/index")->with('status', 'Cambios agregada correctamente');
    }  
}

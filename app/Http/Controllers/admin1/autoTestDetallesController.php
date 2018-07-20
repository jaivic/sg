<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\autoTestDetalles;
use App\Http\Requests\CreateautoTestDetallesRequest;
use App\Http\Requests\UpdateautoTestDetallesRequest;
use App\Http\service\admin1\autoTestDetallesService;
use App\Http\Controllers\AppBaseController;

class autoTestDetallesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new autoTestDetallesService(); 
    }
    public function index()
    {
      $autoTestDetalles = autoTestDetalles::all();
      return view('admin1.autoTestDetalles.index',compact("autoTestDetalles"));
    }
    public function create(){
      return view('admin1.autoTestDetalles.create');
    }
    public function edit($id){
      $autoTestDetalles = autoTestDetalles::find($id);
      return view('admin1.autoTestDetalles.edit',compact("autoTestDetalles"));
    }
     public function show($id){
        $autoTestDetalles = autoTestDetalles::find($id);
        return view('admin1.autoTestDetalles.show',compact("autoTestDetalles"));
    }
    public function store(CreateautoTestDetallesRequest $request)
    { 
        $autoTestDetalles = $this->service->create($request->all());
        return redirect("autotestdetalles/edit/$autoTestDetalles->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateautoTestDetallesRequest $request,$id)
    {
        $autoTestDetalles = $this->service->update($request->all(),$id);
        return redirect("autotestdetalles/edit/$autoTestDetalles->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("autotestdetalles/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\paises;
use App\Http\Requests\CreatepaisesRequest;
use App\Http\Requests\UpdatepaisesRequest;
use App\Http\service\admin1\paisesService;
use App\Http\Controllers\AppBaseController;

class paisesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new paisesService(); 
    }
    public function index()
    {
      $paises = paises::all();
      return view('admin1.paises.index',compact("paises"));
    }
    public function create(){
      return view('admin1.paises.create');
    }
    public function edit($id){
      $paises = paises::find($id);
      return view('admin1.paises.edit',compact("paises"));
    }
     public function show($id){
        $paises = paises::find($id);
        return view('admin1.paises.show',compact("paises"));
    }
    public function store(CreatepaisesRequest $request)
    { 
        $paises = $this->service->create($request->all());
        return redirect("paises/edit/$paises->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatepaisesRequest $request,$id)
    {
        $paises = $this->service->update($request->all(),$id);
        return redirect("paises/edit/$paises->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("paises/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\analisisAplicaciones;
use App\Http\Requests\CreateanalisisAplicacionesRequest;
use App\Http\Requests\UpdateanalisisAplicacionesRequest;
use App\Http\service\admin1\analisisAplicacionesService;
use App\Http\Controllers\AppBaseController;

class analisisAplicacionesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new analisisAplicacionesService(); 
    }
    public function index()
    {
      $analisisAplicaciones = analisisAplicaciones::all();
      return view('admin1.analisisAplicaciones.index',compact("analisisAplicaciones"));
    }
    public function create(){
      return view('admin1.analisisAplicaciones.create');
    }
    public function edit($id){
      $analisisAplicaciones = analisisAplicaciones::find($id);
      return view('admin1.analisisAplicaciones.edit',compact("analisisAplicaciones"));
    }
     public function show($id){
        $analisisAplicaciones = analisisAplicaciones::find($id);
        return view('admin1.analisisAplicaciones.show',compact("analisisAplicaciones"));
    }
    public function store(CreateanalisisAplicacionesRequest $request)
    { 
        $analisisAplicaciones = $this->service->create($request->all());
        return redirect("analisisaplicaciones/edit/$analisisAplicaciones->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateanalisisAplicacionesRequest $request,$id)
    {
        $analisisAplicaciones = $this->service->update($request->all(),$id);
        return redirect("analisisaplicaciones/edit/$analisisAplicaciones->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("analisisaplicaciones/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\soluciones;
use App\Http\Requests\CreatesolucionesRequest;
use App\Http\Requests\UpdatesolucionesRequest;
use App\Http\service\admin1\solucionesService;
use App\Http\Controllers\AppBaseController;

class solucionesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new solucionesService(); 
    }
    public function index()
    {
      $soluciones = soluciones::all();
      return view('admin1.soluciones.index',compact("soluciones"));
    }
    public function create(){
      return view('admin1.soluciones.create');
    }
    public function edit($id){
      $soluciones = soluciones::find($id);
      return view('admin1.soluciones.edit',compact("soluciones"));
    }
     public function show($id){
        $soluciones = soluciones::find($id);
        return view('admin1.soluciones.show',compact("soluciones"));
    }
    public function store(CreatesolucionesRequest $request)
    { 
        $soluciones = $this->service->create($request->all());
        return redirect("soluciones/edit/$soluciones->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatesolucionesRequest $request,$id)
    {
        $soluciones = $this->service->update($request->all(),$id);
        return redirect("soluciones/edit/$soluciones->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("soluciones/index")->with('status', 'Cambios agregada correctamente');
    }  
}

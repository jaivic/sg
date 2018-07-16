<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\analisisAplicacionesPromediosMensuales;
use App\Http\Requests\CreateanalisisAplicacionesPromediosMensualesRequest;
use App\Http\Requests\UpdateanalisisAplicacionesPromediosMensualesRequest;
use App\Http\service\admin1\analisisAplicacionesPromediosMensualesService;
use App\Http\Controllers\AppBaseController;

class analisisAplicacionesPromediosMensualesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new analisisAplicacionesPromediosMensualesService(); 
    }
    public function index()
    {
      $analisisAplicacionesPromediosMensuales = analisisAplicacionesPromediosMensuales::all();
      return view('admin1.analisisAplicacionesPromediosMensuales.index',compact("analisisAplicacionesPromediosMensuales"));
    }
    public function create(){
      return view('admin1.analisisAplicacionesPromediosMensuales.create');
    }
    public function edit($id){
      $analisisAplicacionesPromediosMensuales = analisisAplicacionesPromediosMensuales::find($id);
      return view('admin1.analisisAplicacionesPromediosMensuales.edit',compact("analisisAplicacionesPromediosMensuales"));
    }
     public function show($id){
        $analisisAplicacionesPromediosMensuales = analisisAplicacionesPromediosMensuales::find($id);
        return view('admin1.analisisAplicacionesPromediosMensuales.show',compact("analisisAplicacionesPromediosMensuales"));
    }
    public function store(CreateanalisisAplicacionesPromediosMensualesRequest $request)
    { 
        $analisisAplicacionesPromediosMensuales = $this->service->create($request->all());
        return redirect("analisisaplicacionespromediosmensuales/edit/$analisisAplicacionesPromediosMensuales->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateanalisisAplicacionesPromediosMensualesRequest $request,$id)
    {
        $analisisAplicacionesPromediosMensuales = $this->service->update($request->all(),$id);
        return redirect("analisisaplicacionespromediosmensuales/edit/$analisisAplicacionesPromediosMensuales->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("analisisaplicacionespromediosmensuales/index")->with('status', 'Cambios agregada correctamente');
    }  
}

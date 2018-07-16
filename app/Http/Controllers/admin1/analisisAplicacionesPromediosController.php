<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\analisisAplicacionesPromedios;
use App\Http\Requests\CreateanalisisAplicacionesPromediosRequest;
use App\Http\Requests\UpdateanalisisAplicacionesPromediosRequest;
use App\Http\service\admin1\analisisAplicacionesPromediosService;
use App\Http\Controllers\AppBaseController;

class analisisAplicacionesPromediosController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new analisisAplicacionesPromediosService(); 
    }
    public function index()
    {
      $analisisAplicacionesPromedios = analisisAplicacionesPromedios::all();
      return view('admin1.analisisAplicacionesPromedios.index',compact("analisisAplicacionesPromedios"));
    }
    public function create(){
      return view('admin1.analisisAplicacionesPromedios.create');
    }
    public function edit($id){
      $analisisAplicacionesPromedios = analisisAplicacionesPromedios::find($id);
      return view('admin1.analisisAplicacionesPromedios.edit',compact("analisisAplicacionesPromedios"));
    }
     public function show($id){
        $analisisAplicacionesPromedios = analisisAplicacionesPromedios::find($id);
        return view('admin1.analisisAplicacionesPromedios.show',compact("analisisAplicacionesPromedios"));
    }
    public function store(CreateanalisisAplicacionesPromediosRequest $request)
    { 
        $analisisAplicacionesPromedios = $this->service->create($request->all());
        return redirect("analisisaplicacionespromedios/edit/$analisisAplicacionesPromedios->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateanalisisAplicacionesPromediosRequest $request,$id)
    {
        $analisisAplicacionesPromedios = $this->service->update($request->all(),$id);
        return redirect("analisisaplicacionespromedios/edit/$analisisAplicacionesPromedios->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("analisisaplicacionespromedios/index")->with('status', 'Cambios agregada correctamente');
    }  
}

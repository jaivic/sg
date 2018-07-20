<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\articulos;
use App\Http\Requests\CreatearticulosRequest;
use App\Http\Requests\UpdatearticulosRequest;
use App\Http\service\admin1\articulosService;
use App\Http\Controllers\AppBaseController;

class articulosController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new articulosService(); 
    }
    public function index()
    {
      $articulos = articulos::all();
      return view('admin1.articulos.index',compact("articulos"));
    }
    public function create(){
      return view('admin1.articulos.create');
    }
    public function edit($id){
      $articulos = articulos::find($id);
      return view('admin1.articulos.edit',compact("articulos"));
    }
     public function show($id){
        $articulos = articulos::find($id);
        return view('admin1.articulos.show',compact("articulos"));
    }
    public function store(CreatearticulosRequest $request)
    { 
        $articulos = $this->service->create($request->all());
        return redirect("articulos/edit/$articulos->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatearticulosRequest $request,$id)
    {
        $articulos = $this->service->update($request->all(),$id);
        return redirect("articulos/edit/$articulos->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("articulos/index")->with('status', 'Cambios agregada correctamente');
    }  
}

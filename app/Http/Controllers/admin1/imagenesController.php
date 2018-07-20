<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\imagenes;
use App\Http\Requests\CreateimagenesRequest;
use App\Http\Requests\UpdateimagenesRequest;
use App\Http\service\admin1\imagenesService;
use App\Http\Controllers\AppBaseController;

class imagenesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new imagenesService(); 
    }
    public function index()
    {
      $imagenes = imagenes::all();
      return view('admin1.imagenes.index',compact("imagenes"));
    }
    public function create(){
      return view('admin1.imagenes.create');
    }
    public function edit($id){
      $imagenes = imagenes::find($id);
      return view('admin1.imagenes.edit',compact("imagenes"));
    }
     public function show($id){
        $imagenes = imagenes::find($id);
        return view('admin1.imagenes.show',compact("imagenes"));
    }
    public function store(CreateimagenesRequest $request)
    { 
        $imagenes = $this->service->create($request->all());
        return redirect("imagenes/edit/$imagenes->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateimagenesRequest $request,$id)
    {
        $imagenes = $this->service->update($request->all(),$id);
        return redirect("imagenes/edit/$imagenes->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("imagenes/index")->with('status', 'Cambios agregada correctamente');
    }  
}

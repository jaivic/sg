<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\categorias;
use App\Http\Requests\CreatecategoriasRequest;
use App\Http\Requests\UpdatecategoriasRequest;
use App\Http\service\admin1\categoriasService;
use App\Http\Controllers\AppBaseController;

class categoriasController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new categoriasService(); 
    }
    public function index()
    {
      $categorias = categorias::all();
      return view('admin1.categorias.index',compact("categorias"));
    }
    public function create(){
      return view('admin1.categorias.create');
    }
    public function edit($id){
      $categorias = categorias::find($id);
      return view('admin1.categorias.edit',compact("categorias"));
    }
     public function show($id){
        $categorias = categorias::find($id);
        return view('admin1.categorias.show',compact("categorias"));
    }
    public function store(CreatecategoriasRequest $request)
    { 
        $categorias = $this->service->create($request->all());
        return redirect("categorias/edit/$categorias->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatecategoriasRequest $request,$id)
    {
        $categorias = $this->service->update($request->all(),$id);
        return redirect("categorias/edit/$categorias->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("categorias/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\problemas;
use App\Http\Requests\CreateproblemasRequest;
use App\Http\Requests\UpdateproblemasRequest;
use App\Http\service\admin1\problemasService;
use App\Http\Controllers\AppBaseController;

class problemasController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new problemasService(); 
    }
    public function index()
    {
      $problemas = problemas::all();
      return view('admin1.problemas.index',compact("problemas"));
    }
    public function create(){
      return view('admin1.problemas.create');
    }
    public function edit($id){
      $problemas = problemas::find($id);
      return view('admin1.problemas.edit',compact("problemas"));
    }
     public function show($id){
        $problemas = problemas::find($id);
        return view('admin1.problemas.show',compact("problemas"));
    }
    public function store(CreateproblemasRequest $request)
    { 
        $problemas = $this->service->create($request->all());
        return redirect("problemas/edit/$problemas->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateproblemasRequest $request,$id)
    {
        $problemas = $this->service->update($request->all(),$id);
        return redirect("problemas/edit/$problemas->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("problemas/index")->with('status', 'Cambios agregada correctamente');
    }  
}

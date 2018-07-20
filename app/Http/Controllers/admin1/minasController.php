<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\minas;
use App\Http\Requests\CreateminasRequest;
use App\Http\Requests\UpdateminasRequest;
use App\Http\service\admin1\minasService;
use App\Http\Controllers\AppBaseController;

class minasController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new minasService(); 
    }
    public function index()
    {
      $minas = minas::all();
      return view('admin1.minas.index',compact("minas"));
    }
    public function create(){
      return view('admin1.minas.create');
    }
    public function edit($id){
      $minas = minas::find($id);
      return view('admin1.minas.edit',compact("minas"));
    }
     public function show($id){
        $minas = minas::find($id);
        return view('admin1.minas.show',compact("minas"));
    }
    public function store(CreateminasRequest $request)
    { 
        $minas = $this->service->create($request->all());
        return redirect("minas/edit/$minas->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateminasRequest $request,$id)
    {
        $minas = $this->service->update($request->all(),$id);
        return redirect("minas/edit/$minas->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("minas/index")->with('status', 'Cambios agregada correctamente');
    }  
}

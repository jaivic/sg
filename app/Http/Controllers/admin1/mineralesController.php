<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\minerales;
use App\Http\Requests\CreatemineralesRequest;
use App\Http\Requests\UpdatemineralesRequest;
use App\Http\service\admin1\mineralesService;
use App\Http\Controllers\AppBaseController;

class mineralesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mineralesService(); 
    }
    public function index()
    {
      $minerales = minerales::all();
      return view('admin1.minerales.index',compact("minerales"));
    }
    public function create(){
      return view('admin1.minerales.create');
    }
    public function edit($id){
      $minerales = minerales::find($id);
      return view('admin1.minerales.edit',compact("minerales"));
    }
     public function show($id){
        $minerales = minerales::find($id);
        return view('admin1.minerales.show',compact("minerales"));
    }
    public function store(CreatemineralesRequest $request)
    { 
        $minerales = $this->service->create($request->all());
        return redirect("minerales/edit/$minerales->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatemineralesRequest $request,$id)
    {
        $minerales = $this->service->update($request->all(),$id);
        return redirect("minerales/edit/$minerales->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("minerales/index")->with('status', 'Cambios agregada correctamente');
    }  
}

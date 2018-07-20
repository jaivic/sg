<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\razones;
use App\Http\Requests\CreaterazonesRequest;
use App\Http\Requests\UpdaterazonesRequest;
use App\Http\service\admin1\razonesService;
use App\Http\Controllers\AppBaseController;

class razonesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new razonesService(); 
    }
    public function index()
    {
      $razones = razones::all();
      return view('admin1.razones.index',compact("razones"));
    }
    public function create(){
      return view('admin1.razones.create');
    }
    public function edit($id){
      $razones = razones::find($id);
      return view('admin1.razones.edit',compact("razones"));
    }
     public function show($id){
        $razones = razones::find($id);
        return view('admin1.razones.show',compact("razones"));
    }
    public function store(CreaterazonesRequest $request)
    { 
        $razones = $this->service->create($request->all());
        return redirect("razones/edit/$razones->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdaterazonesRequest $request,$id)
    {
        $razones = $this->service->update($request->all(),$id);
        return redirect("razones/edit/$razones->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("razones/index")->with('status', 'Cambios agregada correctamente');
    }  
}

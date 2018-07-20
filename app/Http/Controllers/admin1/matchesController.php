<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\matches;
use App\Http\Requests\CreatematchesRequest;
use App\Http\Requests\UpdatematchesRequest;
use App\Http\service\admin1\matchesService;
use App\Http\Controllers\AppBaseController;

class matchesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new matchesService(); 
    }
    public function index()
    {
      $matches = matches::all();
      return view('admin1.matches.index',compact("matches"));
    }
    public function create(){
      return view('admin1.matches.create');
    }
    public function edit($id){
      $matches = matches::find($id);
      return view('admin1.matches.edit',compact("matches"));
    }
     public function show($id){
        $matches = matches::find($id);
        return view('admin1.matches.show',compact("matches"));
    }
    public function store(CreatematchesRequest $request)
    { 
        $matches = $this->service->create($request->all());
        return redirect("matches/edit/$matches->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatematchesRequest $request,$id)
    {
        $matches = $this->service->update($request->all(),$id);
        return redirect("matches/edit/$matches->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("matches/index")->with('status', 'Cambios agregada correctamente');
    }  
}

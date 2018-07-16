<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\retentions;
use App\Http\Requests\CreateretentionsRequest;
use App\Http\Requests\UpdateretentionsRequest;
use App\Http\service\admin1\retentionsService;
use App\Http\Controllers\AppBaseController;

class retentionsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new retentionsService(); 
    }
    public function index()
    {
      $retentions = retentions::all();
      return view('admin1.retentions.index',compact("retentions"));
    }
    public function create(){
      return view('admin1.retentions.create');
    }
    public function edit($id){
      $retentions = retentions::find($id);
      return view('admin1.retentions.edit',compact("retentions"));
    }
     public function show($id){
        $retentions = retentions::find($id);
        return view('admin1.retentions.show',compact("retentions"));
    }
    public function store(CreateretentionsRequest $request)
    { 
        $retentions = $this->service->create($request->all());
        return redirect("retentions/edit/$retentions->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateretentionsRequest $request,$id)
    {
        $retentions = $this->service->update($request->all(),$id);
        return redirect("retentions/edit/$retentions->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("retentions/index")->with('status', 'Cambios agregada correctamente');
    }  
}

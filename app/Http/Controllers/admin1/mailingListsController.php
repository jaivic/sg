<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\mailingLists;
use App\Http\Requests\CreatemailingListsRequest;
use App\Http\Requests\UpdatemailingListsRequest;
use App\Http\service\admin1\mailingListsService;
use App\Http\Controllers\AppBaseController;

class mailingListsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mailingListsService(); 
    }
    public function index()
    {
      $mailingLists = mailingLists::all();
      return view('admin1.mailingLists.index',compact("mailingLists"));
    }
    public function create(){
      return view('admin1.mailingLists.create');
    }
    public function edit($id){
      $mailingLists = mailingLists::find($id);
      return view('admin1.mailingLists.edit',compact("mailingLists"));
    }
     public function show($id){
        $mailingLists = mailingLists::find($id);
        return view('admin1.mailingLists.show',compact("mailingLists"));
    }
    public function store(CreatemailingListsRequest $request)
    { 
        $mailingLists = $this->service->create($request->all());
        return redirect("mailinglists/edit/$mailingLists->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatemailingListsRequest $request,$id)
    {
        $mailingLists = $this->service->update($request->all(),$id);
        return redirect("mailinglists/edit/$mailingLists->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("mailinglists/index")->with('status', 'Cambios agregada correctamente');
    }  
}

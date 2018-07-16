<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketRestoreDatabases;
use App\Http\Requests\CreateticketRestoreDatabasesRequest;
use App\Http\Requests\UpdateticketRestoreDatabasesRequest;
use App\Http\service\admin1\ticketRestoreDatabasesService;
use App\Http\Controllers\AppBaseController;

class ticketRestoreDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketRestoreDatabasesService(); 
    }
    public function index()
    {
      $ticketRestoreDatabases = ticketRestoreDatabases::all();
      return view('admin1.ticketRestoreDatabases.index',compact("ticketRestoreDatabases"));
    }
    public function create(){
      return view('admin1.ticketRestoreDatabases.create');
    }
    public function edit($id){
      $ticketRestoreDatabases = ticketRestoreDatabases::find($id);
      return view('admin1.ticketRestoreDatabases.edit',compact("ticketRestoreDatabases"));
    }
     public function show($id){
        $ticketRestoreDatabases = ticketRestoreDatabases::find($id);
        return view('admin1.ticketRestoreDatabases.show',compact("ticketRestoreDatabases"));
    }
    public function store(CreateticketRestoreDatabasesRequest $request)
    { 
        $ticketRestoreDatabases = $this->service->create($request->all());
        return redirect("ticketrestoredatabases/edit/$ticketRestoreDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketRestoreDatabasesRequest $request,$id)
    {
        $ticketRestoreDatabases = $this->service->update($request->all(),$id);
        return redirect("ticketrestoredatabases/edit/$ticketRestoreDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketrestoredatabases/index")->with('status', 'Cambios agregada correctamente');
    }  
}

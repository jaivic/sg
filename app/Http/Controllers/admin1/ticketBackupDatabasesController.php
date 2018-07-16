<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketBackupDatabases;
use App\Http\Requests\CreateticketBackupDatabasesRequest;
use App\Http\Requests\UpdateticketBackupDatabasesRequest;
use App\Http\service\admin1\ticketBackupDatabasesService;
use App\Http\Controllers\AppBaseController;

class ticketBackupDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketBackupDatabasesService(); 
    }
    public function index()
    {
      $ticketBackupDatabases = ticketBackupDatabases::all();
      return view('admin1.ticketBackupDatabases.index',compact("ticketBackupDatabases"));
    }
    public function create(){
      return view('admin1.ticketBackupDatabases.create');
    }
    public function edit($id){
      $ticketBackupDatabases = ticketBackupDatabases::find($id);
      return view('admin1.ticketBackupDatabases.edit',compact("ticketBackupDatabases"));
    }
     public function show($id){
        $ticketBackupDatabases = ticketBackupDatabases::find($id);
        return view('admin1.ticketBackupDatabases.show',compact("ticketBackupDatabases"));
    }
    public function store(CreateticketBackupDatabasesRequest $request)
    { 
        $ticketBackupDatabases = $this->service->create($request->all());
        return redirect("ticketbackupdatabases/edit/$ticketBackupDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketBackupDatabasesRequest $request,$id)
    {
        $ticketBackupDatabases = $this->service->update($request->all(),$id);
        return redirect("ticketbackupdatabases/edit/$ticketBackupDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketbackupdatabases/index")->with('status', 'Cambios agregada correctamente');
    }  
}

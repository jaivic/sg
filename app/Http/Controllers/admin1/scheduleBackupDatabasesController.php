<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\scheduleBackupDatabases;
use App\Http\Requests\CreatescheduleBackupDatabasesRequest;
use App\Http\Requests\UpdatescheduleBackupDatabasesRequest;
use App\Http\service\admin1\scheduleBackupDatabasesService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupDatabasesService(); 
    }
    public function index()
    {
      $scheduleBackupDatabases = scheduleBackupDatabases::all();
      return view('admin1.scheduleBackupDatabases.index',compact("scheduleBackupDatabases"));
    }
    public function create(){
      return view('admin1.scheduleBackupDatabases.create');
    }
    public function edit($id){
      $scheduleBackupDatabases = scheduleBackupDatabases::find($id);
      return view('admin1.scheduleBackupDatabases.edit',compact("scheduleBackupDatabases"));
    }
     public function show($id){
        $scheduleBackupDatabases = scheduleBackupDatabases::find($id);
        return view('admin1.scheduleBackupDatabases.show',compact("scheduleBackupDatabases"));
    }
    public function store(CreatescheduleBackupDatabasesRequest $request)
    { 
        $scheduleBackupDatabases = $this->service->create($request->all());
        return redirect("schedulebackupdatabases/edit/$scheduleBackupDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatescheduleBackupDatabasesRequest $request,$id)
    {
        $scheduleBackupDatabases = $this->service->update($request->all(),$id);
        return redirect("schedulebackupdatabases/edit/$scheduleBackupDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("schedulebackupdatabases/index")->with('status', 'Cambios agregada correctamente');
    }  
}

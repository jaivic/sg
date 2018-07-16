<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\scheduleBackupApplications;
use App\Http\Requests\CreatescheduleBackupApplicationsRequest;
use App\Http\Requests\UpdatescheduleBackupApplicationsRequest;
use App\Http\service\admin1\scheduleBackupApplicationsService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupApplicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupApplicationsService(); 
    }
    public function index()
    {
      $scheduleBackupApplications = scheduleBackupApplications::all();
      return view('admin1.scheduleBackupApplications.index',compact("scheduleBackupApplications"));
    }
    public function create(){
      return view('admin1.scheduleBackupApplications.create');
    }
    public function edit($id){
      $scheduleBackupApplications = scheduleBackupApplications::find($id);
      return view('admin1.scheduleBackupApplications.edit',compact("scheduleBackupApplications"));
    }
     public function show($id){
        $scheduleBackupApplications = scheduleBackupApplications::find($id);
        return view('admin1.scheduleBackupApplications.show',compact("scheduleBackupApplications"));
    }
    public function store(CreatescheduleBackupApplicationsRequest $request)
    { 
        $scheduleBackupApplications = $this->service->create($request->all());
        return redirect("schedulebackupapplications/edit/$scheduleBackupApplications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatescheduleBackupApplicationsRequest $request,$id)
    {
        $scheduleBackupApplications = $this->service->update($request->all(),$id);
        return redirect("schedulebackupapplications/edit/$scheduleBackupApplications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("schedulebackupapplications/index")->with('status', 'Cambios agregada correctamente');
    }  
}

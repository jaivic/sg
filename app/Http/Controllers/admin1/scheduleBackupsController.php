<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\scheduleBackups;
use App\Http\Requests\CreatescheduleBackupsRequest;
use App\Http\Requests\UpdatescheduleBackupsRequest;
use App\Http\service\admin1\scheduleBackupsService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupsService(); 
    }
    public function index()
    {
      $scheduleBackups = scheduleBackups::all();
      return view('admin1.scheduleBackups.index',compact("scheduleBackups"));
    }
    public function create(){
      return view('admin1.scheduleBackups.create');
    }
    public function edit($id){
      $scheduleBackups = scheduleBackups::find($id);
      return view('admin1.scheduleBackups.edit',compact("scheduleBackups"));
    }
     public function show($id){
        $scheduleBackups = scheduleBackups::find($id);
        return view('admin1.scheduleBackups.show',compact("scheduleBackups"));
    }
    public function store(CreatescheduleBackupsRequest $request)
    { 
        $scheduleBackups = $this->service->create($request->all());
        return redirect("schedulebackups/edit/$scheduleBackups->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatescheduleBackupsRequest $request,$id)
    {
        $scheduleBackups = $this->service->update($request->all(),$id);
        return redirect("schedulebackups/edit/$scheduleBackups->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("schedulebackups/index")->with('status', 'Cambios agregada correctamente');
    }  
}

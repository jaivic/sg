<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\backupApplications;
use App\Http\Requests\CreatebackupApplicationsRequest;
use App\Http\Requests\UpdatebackupApplicationsRequest;
use App\Http\service\admin1\backupApplicationsService;
use App\Http\Controllers\AppBaseController;

class backupApplicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupApplicationsService(); 
    }
    public function index()
    {
      $backupApplications = backupApplications::all();
      return view('admin1.backupApplications.index',compact("backupApplications"));
    }
    public function create(){
      return view('admin1.backupApplications.create');
    }
    public function edit($id){
      $backupApplications = backupApplications::find($id);
      return view('admin1.backupApplications.edit',compact("backupApplications"));
    }
     public function show($id){
        $backupApplications = backupApplications::find($id);
        return view('admin1.backupApplications.show',compact("backupApplications"));
    }
    public function store(CreatebackupApplicationsRequest $request)
    { 
        $backupApplications = $this->service->create($request->all());
        return redirect("backupapplications/edit/$backupApplications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatebackupApplicationsRequest $request,$id)
    {
        $backupApplications = $this->service->update($request->all(),$id);
        return redirect("backupapplications/edit/$backupApplications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("backupapplications/index")->with('status', 'Cambios agregada correctamente');
    }  
}

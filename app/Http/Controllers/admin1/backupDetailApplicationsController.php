<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\backupDetailApplications;
use App\Http\Requests\CreatebackupDetailApplicationsRequest;
use App\Http\Requests\UpdatebackupDetailApplicationsRequest;
use App\Http\service\admin1\backupDetailApplicationsService;
use App\Http\Controllers\AppBaseController;

class backupDetailApplicationsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupDetailApplicationsService(); 
    }
    public function index()
    {
      $backupDetailApplications = backupDetailApplications::all();
      return view('admin1.backupDetailApplications.index',compact("backupDetailApplications"));
    }
    public function create(){
      return view('admin1.backupDetailApplications.create');
    }
    public function edit($id){
      $backupDetailApplications = backupDetailApplications::find($id);
      return view('admin1.backupDetailApplications.edit',compact("backupDetailApplications"));
    }
     public function show($id){
        $backupDetailApplications = backupDetailApplications::find($id);
        return view('admin1.backupDetailApplications.show',compact("backupDetailApplications"));
    }
    public function store(CreatebackupDetailApplicationsRequest $request)
    { 
        $backupDetailApplications = $this->service->create($request->all());
        return redirect("backupdetailapplications/edit/$backupDetailApplications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatebackupDetailApplicationsRequest $request,$id)
    {
        $backupDetailApplications = $this->service->update($request->all(),$id);
        return redirect("backupdetailapplications/edit/$backupDetailApplications->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("backupdetailapplications/index")->with('status', 'Cambios agregada correctamente');
    }  
}

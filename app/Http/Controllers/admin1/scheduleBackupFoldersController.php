<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\scheduleBackupFolders;
use App\Http\Requests\CreatescheduleBackupFoldersRequest;
use App\Http\Requests\UpdatescheduleBackupFoldersRequest;
use App\Http\service\admin1\scheduleBackupFoldersService;
use App\Http\Controllers\AppBaseController;

class scheduleBackupFoldersController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new scheduleBackupFoldersService(); 
    }
    public function index()
    {
      $scheduleBackupFolders = scheduleBackupFolders::all();
      return view('admin1.scheduleBackupFolders.index',compact("scheduleBackupFolders"));
    }
    public function create(){
      return view('admin1.scheduleBackupFolders.create');
    }
    public function edit($id){
      $scheduleBackupFolders = scheduleBackupFolders::find($id);
      return view('admin1.scheduleBackupFolders.edit',compact("scheduleBackupFolders"));
    }
     public function show($id){
        $scheduleBackupFolders = scheduleBackupFolders::find($id);
        return view('admin1.scheduleBackupFolders.show',compact("scheduleBackupFolders"));
    }
    public function store(CreatescheduleBackupFoldersRequest $request)
    { 
        $scheduleBackupFolders = $this->service->create($request->all());
        return redirect("schedulebackupfolders/edit/$scheduleBackupFolders->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatescheduleBackupFoldersRequest $request,$id)
    {
        $scheduleBackupFolders = $this->service->update($request->all(),$id);
        return redirect("schedulebackupfolders/edit/$scheduleBackupFolders->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("schedulebackupfolders/index")->with('status', 'Cambios agregada correctamente');
    }  
}

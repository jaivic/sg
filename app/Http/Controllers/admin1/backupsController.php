<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\backups;
use App\Http\Requests\CreatebackupsRequest;
use App\Http\Requests\UpdatebackupsRequest;
use App\Http\service\admin1\backupsService;
use App\Http\Controllers\AppBaseController;

class backupsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupsService(); 
    }
    public function index()
    {
      $backups = backups::all();
      return view('admin1.backups.index',compact("backups"));
    }
    public function create(){
      return view('admin1.backups.create');
    }
    public function edit($id){
      $backups = backups::find($id);
      return view('admin1.backups.edit',compact("backups"));
    }
     public function show($id){
        $backups = backups::find($id);
        return view('admin1.backups.show',compact("backups"));
    }
    public function store(CreatebackupsRequest $request)
    { 
        $backups = $this->service->create($request->all());
        return redirect("backups/edit/$backups->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatebackupsRequest $request,$id)
    {
        $backups = $this->service->update($request->all(),$id);
        return redirect("backups/edit/$backups->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("backups/index")->with('status', 'Cambios agregada correctamente');
    }  
}

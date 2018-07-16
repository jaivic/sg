<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\backupDetails;
use App\Http\Requests\CreatebackupDetailsRequest;
use App\Http\Requests\UpdatebackupDetailsRequest;
use App\Http\service\admin1\backupDetailsService;
use App\Http\Controllers\AppBaseController;

class backupDetailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupDetailsService(); 
    }
    public function index()
    {
      $backupDetails = backupDetails::all();
      return view('admin1.backupDetails.index',compact("backupDetails"));
    }
    public function create(){
      return view('admin1.backupDetails.create');
    }
    public function edit($id){
      $backupDetails = backupDetails::find($id);
      return view('admin1.backupDetails.edit',compact("backupDetails"));
    }
     public function show($id){
        $backupDetails = backupDetails::find($id);
        return view('admin1.backupDetails.show',compact("backupDetails"));
    }
    public function store(CreatebackupDetailsRequest $request)
    { 
        $backupDetails = $this->service->create($request->all());
        return redirect("backupdetails/edit/$backupDetails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatebackupDetailsRequest $request,$id)
    {
        $backupDetails = $this->service->update($request->all(),$id);
        return redirect("backupdetails/edit/$backupDetails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("backupdetails/index")->with('status', 'Cambios agregada correctamente');
    }  
}

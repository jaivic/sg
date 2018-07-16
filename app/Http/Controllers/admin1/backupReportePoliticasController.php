<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\backupReportePoliticas;
use App\Http\Requests\CreatebackupReportePoliticasRequest;
use App\Http\Requests\UpdatebackupReportePoliticasRequest;
use App\Http\service\admin1\backupReportePoliticasService;
use App\Http\Controllers\AppBaseController;

class backupReportePoliticasController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new backupReportePoliticasService(); 
    }
    public function index()
    {
      $backupReportePoliticas = backupReportePoliticas::all();
      return view('admin1.backupReportePoliticas.index',compact("backupReportePoliticas"));
    }
    public function create(){
      return view('admin1.backupReportePoliticas.create');
    }
    public function edit($id){
      $backupReportePoliticas = backupReportePoliticas::find($id);
      return view('admin1.backupReportePoliticas.edit',compact("backupReportePoliticas"));
    }
     public function show($id){
        $backupReportePoliticas = backupReportePoliticas::find($id);
        return view('admin1.backupReportePoliticas.show',compact("backupReportePoliticas"));
    }
    public function store(CreatebackupReportePoliticasRequest $request)
    { 
        $backupReportePoliticas = $this->service->create($request->all());
        return redirect("backupreportepoliticas/edit/$backupReportePoliticas->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatebackupReportePoliticasRequest $request,$id)
    {
        $backupReportePoliticas = $this->service->update($request->all(),$id);
        return redirect("backupreportepoliticas/edit/$backupReportePoliticas->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("backupreportepoliticas/index")->with('status', 'Cambios agregada correctamente');
    }  
}

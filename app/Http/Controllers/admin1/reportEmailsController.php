<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\reportEmails;
use App\Http\Requests\CreatereportEmailsRequest;
use App\Http\Requests\UpdatereportEmailsRequest;
use App\Http\service\admin1\reportEmailsService;
use App\Http\Controllers\AppBaseController;

class reportEmailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new reportEmailsService(); 
    }
    public function index()
    {
      $reportEmails = reportEmails::all();
      return view('admin1.reportEmails.index',compact("reportEmails"));
    }
    public function create(){
      return view('admin1.reportEmails.create');
    }
    public function edit($id){
      $reportEmails = reportEmails::find($id);
      return view('admin1.reportEmails.edit',compact("reportEmails"));
    }
     public function show($id){
        $reportEmails = reportEmails::find($id);
        return view('admin1.reportEmails.show',compact("reportEmails"));
    }
    public function store(CreatereportEmailsRequest $request)
    { 
        $reportEmails = $this->service->create($request->all());
        return redirect("reportemails/edit/$reportEmails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatereportEmailsRequest $request,$id)
    {
        $reportEmails = $this->service->update($request->all(),$id);
        return redirect("reportemails/edit/$reportEmails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("reportemails/index")->with('status', 'Cambios agregada correctamente');
    }  
}

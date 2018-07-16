<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\mails;
use App\Http\Requests\CreatemailsRequest;
use App\Http\Requests\UpdatemailsRequest;
use App\Http\service\admin1\mailsService;
use App\Http\Controllers\AppBaseController;

class mailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mailsService(); 
    }
    public function index()
    {
      $mails = mails::all();
      return view('admin1.mails.index',compact("mails"));
    }
    public function create(){
      return view('admin1.mails.create');
    }
    public function edit($id){
      $mails = mails::find($id);
      return view('admin1.mails.edit',compact("mails"));
    }
     public function show($id){
        $mails = mails::find($id);
        return view('admin1.mails.show',compact("mails"));
    }
    public function store(CreatemailsRequest $request)
    { 
        $mails = $this->service->create($request->all());
        return redirect("mails/edit/$mails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatemailsRequest $request,$id)
    {
        $mails = $this->service->update($request->all(),$id);
        return redirect("mails/edit/$mails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("mails/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\globalNotificationMails;
use App\Http\Requests\CreateglobalNotificationMailsRequest;
use App\Http\Requests\UpdateglobalNotificationMailsRequest;
use App\Http\service\admin1\globalNotificationMailsService;
use App\Http\Controllers\AppBaseController;

class globalNotificationMailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new globalNotificationMailsService(); 
    }
    public function index()
    {
      $globalNotificationMails = globalNotificationMails::all();
      return view('admin1.globalNotificationMails.index',compact("globalNotificationMails"));
    }
    public function create(){
      return view('admin1.globalNotificationMails.create');
    }
    public function edit($id){
      $globalNotificationMails = globalNotificationMails::find($id);
      return view('admin1.globalNotificationMails.edit',compact("globalNotificationMails"));
    }
     public function show($id){
        $globalNotificationMails = globalNotificationMails::find($id);
        return view('admin1.globalNotificationMails.show',compact("globalNotificationMails"));
    }
    public function store(CreateglobalNotificationMailsRequest $request)
    { 
        $globalNotificationMails = $this->service->create($request->all());
        return redirect("globalnotificationmails/edit/$globalNotificationMails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateglobalNotificationMailsRequest $request,$id)
    {
        $globalNotificationMails = $this->service->update($request->all(),$id);
        return redirect("globalnotificationmails/edit/$globalNotificationMails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("globalnotificationmails/index")->with('status', 'Cambios agregada correctamente');
    }  
}

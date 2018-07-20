<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\globalNotificationMailBds;
use App\Http\Requests\CreateglobalNotificationMailBdsRequest;
use App\Http\Requests\UpdateglobalNotificationMailBdsRequest;
use App\Http\service\admin1\globalNotificationMailBdsService;
use App\Http\Controllers\AppBaseController;

class globalNotificationMailBdsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new globalNotificationMailBdsService(); 
    }
    public function index()
    {
      $globalNotificationMailBds = globalNotificationMailBds::all();
      return view('admin1.globalNotificationMailBds.index',compact("globalNotificationMailBds"));
    }
    public function create(){
      return view('admin1.globalNotificationMailBds.create');
    }
    public function edit($id){
      $globalNotificationMailBds = globalNotificationMailBds::find($id);
      return view('admin1.globalNotificationMailBds.edit',compact("globalNotificationMailBds"));
    }
     public function show($id){
        $globalNotificationMailBds = globalNotificationMailBds::find($id);
        return view('admin1.globalNotificationMailBds.show',compact("globalNotificationMailBds"));
    }
    public function store(CreateglobalNotificationMailBdsRequest $request)
    { 
        $globalNotificationMailBds = $this->service->create($request->all());
        return redirect("globalnotificationmailbds/edit/$globalNotificationMailBds->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateglobalNotificationMailBdsRequest $request,$id)
    {
        $globalNotificationMailBds = $this->service->update($request->all(),$id);
        return redirect("globalnotificationmailbds/edit/$globalNotificationMailBds->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("globalnotificationmailbds/index")->with('status', 'Cambios agregada correctamente');
    }  
}

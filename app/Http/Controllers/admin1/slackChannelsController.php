<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\slackChannels;
use App\Http\Requests\CreateslackChannelsRequest;
use App\Http\Requests\UpdateslackChannelsRequest;
use App\Http\service\admin1\slackChannelsService;
use App\Http\Controllers\AppBaseController;

class slackChannelsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new slackChannelsService(); 
    }
    public function index()
    {
      $slackChannels = slackChannels::all();
      return view('admin1.slackChannels.index',compact("slackChannels"));
    }
    public function create(){
      return view('admin1.slackChannels.create');
    }
    public function edit($id){
      $slackChannels = slackChannels::find($id);
      return view('admin1.slackChannels.edit',compact("slackChannels"));
    }
     public function show($id){
        $slackChannels = slackChannels::find($id);
        return view('admin1.slackChannels.show',compact("slackChannels"));
    }
    public function store(CreateslackChannelsRequest $request)
    { 
        $slackChannels = $this->service->create($request->all());
        return redirect("slackchannels/edit/$slackChannels->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateslackChannelsRequest $request,$id)
    {
        $slackChannels = $this->service->update($request->all(),$id);
        return redirect("slackchannels/edit/$slackChannels->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("slackchannels/index")->with('status', 'Cambios agregada correctamente');
    }  
}

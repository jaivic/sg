<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\tags;


use App\Http\service\admin1\tagsService;
use App\Http\Controllers\AppBaseController;

class tagsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new tagsService(); 
    }
    public function index()
    {
      $tags = tags::all();
      return view('admin1.tags.index',compact("tags"));
    }
    public function create(){
      return view('admin1.tags.create');
    }
    public function edit($id){
      $tags = tags::find($id);
      return view('admin1.tags.edit',compact("tags"));
    }
     public function show($id){
        $row = tags::find($id);
        return view('admin1.tags.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $tags = $this->service->create($request->all());
        return redirect("tags/edit/$tags->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $tags = $this->service->update($request->all(),$id);
        return redirect("tags/edit/$tags->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("tags/index")->with('status', 'Cambios agregada correctamente');
    }  
}

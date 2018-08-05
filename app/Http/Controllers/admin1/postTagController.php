<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\postTag;


use App\Http\service\admin1\postTagService;
use App\Http\Controllers\AppBaseController;

class postTagController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new postTagService(); 
    }
    public function index()
    {
      $postTag = postTag::all();
      return view('admin1.postTag.index',compact("postTag"));
    }
    public function create(){
      return view('admin1.postTag.create');
    }
    public function edit($id){
      $postTag = postTag::find($id);
      return view('admin1.postTag.edit',compact("postTag"));
    }
     public function show($id){
        $row = postTag::find($id);
        return view('admin1.postTag.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $postTag = $this->service->create($request->all());
        return redirect("posttag/edit/$postTag->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $postTag = $this->service->update($request->all(),$id);
        return redirect("posttag/edit/$postTag->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("posttag/index")->with('status', 'Cambios agregada correctamente');
    }  
}

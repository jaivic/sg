<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\comments;


use App\Http\service\admin1\commentsService;
use App\Http\Controllers\AppBaseController;

class commentsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new commentsService(); 
    }
    public function index()
    {
      $comments = comments::all();
      return view('admin1.comments.index',compact("comments"));
    }
    public function create(){
      return view('admin1.comments.create');
    }
    public function edit($id){
      $comments = comments::find($id);
      return view('admin1.comments.edit',compact("comments"));
    }
     public function show($id){
        $row = comments::find($id);
        return view('admin1.comments.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $comments = $this->service->create($request->all());
        return redirect("comments/edit/$comments->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $comments = $this->service->update($request->all(),$id);
        return redirect("comments/edit/$comments->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("comments/index")->with('status', 'Cambios agregada correctamente');
    }  
}

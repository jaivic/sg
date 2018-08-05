<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\posts;


use App\Http\service\admin1\postsService;
use App\Http\Controllers\AppBaseController;

class postsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new postsService(); 
    }
    public function index()
    {
      $posts = posts::all();
      return view('admin1.posts.index',compact("posts"));
    }
    public function create(){
      return view('admin1.posts.create');
    }
    public function edit($id){
      $posts = posts::find($id);
      return view('admin1.posts.edit',compact("posts"));
    }
     public function show($id){
        $row = posts::find($id);
        return view('admin1.posts.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $posts = $this->service->create($request->all());
        return redirect("posts/edit/$posts->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $posts = $this->service->update($request->all(),$id);
        return redirect("posts/edit/$posts->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("posts/index")->with('status', 'Cambios agregada correctamente');
    }  
}

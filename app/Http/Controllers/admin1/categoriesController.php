<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\categories;


use App\Http\service\admin1\categoriesService;
use App\Http\Controllers\AppBaseController;

class categoriesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new categoriesService(); 
    }
    public function index()
    {
      $categories = categories::all();
      return view('admin1.categories.index',compact("categories"));
    }
    public function create(){
      return view('admin1.categories.create');
    }
    public function edit($id){
      $categories = categories::find($id);
      return view('admin1.categories.edit',compact("categories"));
    }
     public function show($id){
        $row = categories::find($id);
        return view('admin1.categories.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $categories = $this->service->create($request->all());
        return redirect("categories/edit/$categories->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $categories = $this->service->update($request->all(),$id);
        return redirect("categories/edit/$categories->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("categories/index")->with('status', 'Cambios agregada correctamente');
    }  
}

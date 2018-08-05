<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\postCategory;


use App\Http\service\admin1\postCategoryService;
use App\Http\Controllers\AppBaseController;

class postCategoryController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new postCategoryService(); 
    }
    public function index()
    {
      $postCategory = postCategory::all();
      return view('admin1.postCategory.index',compact("postCategory"));
    }
    public function create(){
      return view('admin1.postCategory.create');
    }
    public function edit($id){
      $postCategory = postCategory::find($id);
      return view('admin1.postCategory.edit',compact("postCategory"));
    }
     public function show($id){
        $row = postCategory::find($id);
        return view('admin1.postCategory.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $postCategory = $this->service->create($request->all());
        return redirect("postcategory/edit/$postCategory->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $postCategory = $this->service->update($request->all(),$id);
        return redirect("postcategory/edit/$postCategory->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("postcategory/index")->with('status', 'Cambios agregada correctamente');
    }  
}

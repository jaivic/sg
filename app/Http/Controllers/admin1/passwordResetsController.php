<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\passwordResets;


use App\Http\service\admin1\passwordResetsService;
use App\Http\Controllers\AppBaseController;

class passwordResetsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new passwordResetsService(); 
    }
    public function index()
    {
      $passwordResets = passwordResets::all();
      return view('admin1.passwordResets.index',compact("passwordResets"));
    }
    public function create(){
      return view('admin1.passwordResets.create');
    }
    public function edit($id){
      $passwordResets = passwordResets::find($id);
      return view('admin1.passwordResets.edit',compact("passwordResets"));
    }
     public function show($id){
        $row = passwordResets::find($id);
        return view('admin1.passwordResets.show',compact("row"));
    }
    public function store(Request $request)
    { 
        $passwordResets = $this->service->create($request->all());
        return redirect("passwordresets/edit/$passwordResets->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(Request $request,$id)
    {
        $passwordResets = $this->service->update($request->all(),$id);
        return redirect("passwordresets/edit/$passwordResets->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("passwordresets/index")->with('status', 'Cambios agregada correctamente');
    }  
}

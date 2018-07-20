<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\autoTests;
use App\Http\Requests\CreateautoTestsRequest;
use App\Http\Requests\UpdateautoTestsRequest;
use App\Http\service\admin1\autoTestsService;
use App\Http\Controllers\AppBaseController;

class autoTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new autoTestsService(); 
    }
    public function index()
    {
      $autoTests = autoTests::all();
      return view('admin1.autoTests.index',compact("autoTests"));
    }
    public function create(){
      return view('admin1.autoTests.create');
    }
    public function edit($id){
      $autoTests = autoTests::find($id);
      return view('admin1.autoTests.edit',compact("autoTests"));
    }
     public function show($id){
        $autoTests = autoTests::find($id);
        return view('admin1.autoTests.show',compact("autoTests"));
    }
    public function store(CreateautoTestsRequest $request)
    { 
        $autoTests = $this->service->create($request->all());
        return redirect("autotests/edit/$autoTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateautoTestsRequest $request,$id)
    {
        $autoTests = $this->service->update($request->all(),$id);
        return redirect("autotests/edit/$autoTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("autotests/index")->with('status', 'Cambios agregada correctamente');
    }  
}

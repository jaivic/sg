<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\stressTests;
use App\Http\Requests\CreatestressTestsRequest;
use App\Http\Requests\UpdatestressTestsRequest;
use App\Http\service\admin1\stressTestsService;
use App\Http\Controllers\AppBaseController;

class stressTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new stressTestsService(); 
    }
    public function index()
    {
      $stressTests = stressTests::all();
      return view('admin1.stressTests.index',compact("stressTests"));
    }
    public function create(){
      return view('admin1.stressTests.create');
    }
    public function edit($id){
      $stressTests = stressTests::find($id);
      return view('admin1.stressTests.edit',compact("stressTests"));
    }
     public function show($id){
        $stressTests = stressTests::find($id);
        return view('admin1.stressTests.show',compact("stressTests"));
    }
    public function store(CreatestressTestsRequest $request)
    { 
        $stressTests = $this->service->create($request->all());
        return redirect("stresstests/edit/$stressTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatestressTestsRequest $request,$id)
    {
        $stressTests = $this->service->update($request->all(),$id);
        return redirect("stresstests/edit/$stressTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("stresstests/index")->with('status', 'Cambios agregada correctamente');
    }  
}

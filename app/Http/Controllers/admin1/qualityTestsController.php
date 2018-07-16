<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\qualityTests;
use App\Http\Requests\CreatequalityTestsRequest;
use App\Http\Requests\UpdatequalityTestsRequest;
use App\Http\service\admin1\qualityTestsService;
use App\Http\Controllers\AppBaseController;

class qualityTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new qualityTestsService(); 
    }
    public function index()
    {
      $qualityTests = qualityTests::all();
      return view('admin1.qualityTests.index',compact("qualityTests"));
    }
    public function create(){
      return view('admin1.qualityTests.create');
    }
    public function edit($id){
      $qualityTests = qualityTests::find($id);
      return view('admin1.qualityTests.edit',compact("qualityTests"));
    }
     public function show($id){
        $qualityTests = qualityTests::find($id);
        return view('admin1.qualityTests.show',compact("qualityTests"));
    }
    public function store(CreatequalityTestsRequest $request)
    { 
        $qualityTests = $this->service->create($request->all());
        return redirect("qualitytests/edit/$qualityTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatequalityTestsRequest $request,$id)
    {
        $qualityTests = $this->service->update($request->all(),$id);
        return redirect("qualitytests/edit/$qualityTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("qualitytests/index")->with('status', 'Cambios agregada correctamente');
    }  
}

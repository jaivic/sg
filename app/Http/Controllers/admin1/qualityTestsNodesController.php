<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\qualityTestsNodes;
use App\Http\Requests\CreatequalityTestsNodesRequest;
use App\Http\Requests\UpdatequalityTestsNodesRequest;
use App\Http\service\admin1\qualityTestsNodesService;
use App\Http\Controllers\AppBaseController;

class qualityTestsNodesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new qualityTestsNodesService(); 
    }
    public function index()
    {
      $qualityTestsNodes = qualityTestsNodes::all();
      return view('admin1.qualityTestsNodes.index',compact("qualityTestsNodes"));
    }
    public function create(){
      return view('admin1.qualityTestsNodes.create');
    }
    public function edit($id){
      $qualityTestsNodes = qualityTestsNodes::find($id);
      return view('admin1.qualityTestsNodes.edit',compact("qualityTestsNodes"));
    }
     public function show($id){
        $qualityTestsNodes = qualityTestsNodes::find($id);
        return view('admin1.qualityTestsNodes.show',compact("qualityTestsNodes"));
    }
    public function store(CreatequalityTestsNodesRequest $request)
    { 
        $qualityTestsNodes = $this->service->create($request->all());
        return redirect("qualitytestsnodes/edit/$qualityTestsNodes->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatequalityTestsNodesRequest $request,$id)
    {
        $qualityTestsNodes = $this->service->update($request->all(),$id);
        return redirect("qualitytestsnodes/edit/$qualityTestsNodes->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("qualitytestsnodes/index")->with('status', 'Cambios agregada correctamente');
    }  
}

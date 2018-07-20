<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketAutoTests;
use App\Http\Requests\CreateticketAutoTestsRequest;
use App\Http\Requests\UpdateticketAutoTestsRequest;
use App\Http\service\admin1\ticketAutoTestsService;
use App\Http\Controllers\AppBaseController;

class ticketAutoTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketAutoTestsService(); 
    }
    public function index()
    {
      $ticketAutoTests = ticketAutoTests::all();
      return view('admin1.ticketAutoTests.index',compact("ticketAutoTests"));
    }
    public function create(){
      return view('admin1.ticketAutoTests.create');
    }
    public function edit($id){
      $ticketAutoTests = ticketAutoTests::find($id);
      return view('admin1.ticketAutoTests.edit',compact("ticketAutoTests"));
    }
     public function show($id){
        $ticketAutoTests = ticketAutoTests::find($id);
        return view('admin1.ticketAutoTests.show',compact("ticketAutoTests"));
    }
    public function store(CreateticketAutoTestsRequest $request)
    { 
        $ticketAutoTests = $this->service->create($request->all());
        return redirect("ticketautotests/edit/$ticketAutoTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketAutoTestsRequest $request,$id)
    {
        $ticketAutoTests = $this->service->update($request->all(),$id);
        return redirect("ticketautotests/edit/$ticketAutoTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketautotests/index")->with('status', 'Cambios agregada correctamente');
    }  
}

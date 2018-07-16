<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketDetailsTests;
use App\Http\Requests\CreateticketDetailsTestsRequest;
use App\Http\Requests\UpdateticketDetailsTestsRequest;
use App\Http\service\admin1\ticketDetailsTestsService;
use App\Http\Controllers\AppBaseController;

class ticketDetailsTestsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketDetailsTestsService(); 
    }
    public function index()
    {
      $ticketDetailsTests = ticketDetailsTests::all();
      return view('admin1.ticketDetailsTests.index',compact("ticketDetailsTests"));
    }
    public function create(){
      return view('admin1.ticketDetailsTests.create');
    }
    public function edit($id){
      $ticketDetailsTests = ticketDetailsTests::find($id);
      return view('admin1.ticketDetailsTests.edit',compact("ticketDetailsTests"));
    }
     public function show($id){
        $ticketDetailsTests = ticketDetailsTests::find($id);
        return view('admin1.ticketDetailsTests.show',compact("ticketDetailsTests"));
    }
    public function store(CreateticketDetailsTestsRequest $request)
    { 
        $ticketDetailsTests = $this->service->create($request->all());
        return redirect("ticketdetailstests/edit/$ticketDetailsTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketDetailsTestsRequest $request,$id)
    {
        $ticketDetailsTests = $this->service->update($request->all(),$id);
        return redirect("ticketdetailstests/edit/$ticketDetailsTests->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketdetailstests/index")->with('status', 'Cambios agregada correctamente');
    }  
}

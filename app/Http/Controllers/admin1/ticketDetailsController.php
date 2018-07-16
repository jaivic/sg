<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketDetails;
use App\Http\Requests\CreateticketDetailsRequest;
use App\Http\Requests\UpdateticketDetailsRequest;
use App\Http\service\admin1\ticketDetailsService;
use App\Http\Controllers\AppBaseController;

class ticketDetailsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketDetailsService(); 
    }
    public function index()
    {
      $ticketDetails = ticketDetails::all();
      return view('admin1.ticketDetails.index',compact("ticketDetails"));
    }
    public function create(){
      return view('admin1.ticketDetails.create');
    }
    public function edit($id){
      $ticketDetails = ticketDetails::find($id);
      return view('admin1.ticketDetails.edit',compact("ticketDetails"));
    }
     public function show($id){
        $ticketDetails = ticketDetails::find($id);
        return view('admin1.ticketDetails.show',compact("ticketDetails"));
    }
    public function store(CreateticketDetailsRequest $request)
    { 
        $ticketDetails = $this->service->create($request->all());
        return redirect("ticketdetails/edit/$ticketDetails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketDetailsRequest $request,$id)
    {
        $ticketDetails = $this->service->update($request->all(),$id);
        return redirect("ticketdetails/edit/$ticketDetails->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketdetails/index")->with('status', 'Cambios agregada correctamente');
    }  
}

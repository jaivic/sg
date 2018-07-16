<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\tickets;
use App\Http\Requests\CreateticketsRequest;
use App\Http\Requests\UpdateticketsRequest;
use App\Http\service\admin1\ticketsService;
use App\Http\Controllers\AppBaseController;

class ticketsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketsService(); 
    }
    public function index()
    {
      $tickets = tickets::all();
      return view('admin1.tickets.index',compact("tickets"));
    }
    public function create(){
      return view('admin1.tickets.create');
    }
    public function edit($id){
      $tickets = tickets::find($id);
      return view('admin1.tickets.edit',compact("tickets"));
    }
     public function show($id){
        $tickets = tickets::find($id);
        return view('admin1.tickets.show',compact("tickets"));
    }
    public function store(CreateticketsRequest $request)
    { 
        $tickets = $this->service->create($request->all());
        return redirect("tickets/edit/$tickets->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketsRequest $request,$id)
    {
        $tickets = $this->service->update($request->all(),$id);
        return redirect("tickets/edit/$tickets->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("tickets/index")->with('status', 'Cambios agregada correctamente');
    }  
}

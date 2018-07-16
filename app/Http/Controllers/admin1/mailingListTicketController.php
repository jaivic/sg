<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\mailingListTicket;
use App\Http\Requests\CreatemailingListTicketRequest;
use App\Http\Requests\UpdatemailingListTicketRequest;
use App\Http\service\admin1\mailingListTicketService;
use App\Http\Controllers\AppBaseController;

class mailingListTicketController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new mailingListTicketService(); 
    }
    public function index()
    {
      $mailingListTicket = mailingListTicket::all();
      return view('admin1.mailingListTicket.index',compact("mailingListTicket"));
    }
    public function create(){
      return view('admin1.mailingListTicket.create');
    }
    public function edit($id){
      $mailingListTicket = mailingListTicket::find($id);
      return view('admin1.mailingListTicket.edit',compact("mailingListTicket"));
    }
     public function show($id){
        $mailingListTicket = mailingListTicket::find($id);
        return view('admin1.mailingListTicket.show',compact("mailingListTicket"));
    }
    public function store(CreatemailingListTicketRequest $request)
    { 
        $mailingListTicket = $this->service->create($request->all());
        return redirect("mailinglistticket/edit/$mailingListTicket->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatemailingListTicketRequest $request,$id)
    {
        $mailingListTicket = $this->service->update($request->all(),$id);
        return redirect("mailinglistticket/edit/$mailingListTicket->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("mailinglistticket/index")->with('status', 'Cambios agregada correctamente');
    }  
}

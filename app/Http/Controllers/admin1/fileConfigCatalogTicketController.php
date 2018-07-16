<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\fileConfigCatalogTicket;
use App\Http\Requests\CreatefileConfigCatalogTicketRequest;
use App\Http\Requests\UpdatefileConfigCatalogTicketRequest;
use App\Http\service\admin1\fileConfigCatalogTicketService;
use App\Http\Controllers\AppBaseController;

class fileConfigCatalogTicketController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new fileConfigCatalogTicketService(); 
    }
    public function index()
    {
      $fileConfigCatalogTicket = fileConfigCatalogTicket::all();
      return view('admin1.fileConfigCatalogTicket.index',compact("fileConfigCatalogTicket"));
    }
    public function create(){
      return view('admin1.fileConfigCatalogTicket.create');
    }
    public function edit($id){
      $fileConfigCatalogTicket = fileConfigCatalogTicket::find($id);
      return view('admin1.fileConfigCatalogTicket.edit',compact("fileConfigCatalogTicket"));
    }
     public function show($id){
        $fileConfigCatalogTicket = fileConfigCatalogTicket::find($id);
        return view('admin1.fileConfigCatalogTicket.show',compact("fileConfigCatalogTicket"));
    }
    public function store(CreatefileConfigCatalogTicketRequest $request)
    { 
        $fileConfigCatalogTicket = $this->service->create($request->all());
        return redirect("fileconfigcatalogticket/edit/$fileConfigCatalogTicket->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatefileConfigCatalogTicketRequest $request,$id)
    {
        $fileConfigCatalogTicket = $this->service->update($request->all(),$id);
        return redirect("fileconfigcatalogticket/edit/$fileConfigCatalogTicket->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("fileconfigcatalogticket/index")->with('status', 'Cambios agregada correctamente');
    }  
}

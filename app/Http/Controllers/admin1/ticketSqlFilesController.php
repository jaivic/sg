<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\ticketSqlFiles;
use App\Http\Requests\CreateticketSqlFilesRequest;
use App\Http\Requests\UpdateticketSqlFilesRequest;
use App\Http\service\admin1\ticketSqlFilesService;
use App\Http\Controllers\AppBaseController;

class ticketSqlFilesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new ticketSqlFilesService(); 
    }
    public function index()
    {
      $ticketSqlFiles = ticketSqlFiles::all();
      return view('admin1.ticketSqlFiles.index',compact("ticketSqlFiles"));
    }
    public function create(){
      return view('admin1.ticketSqlFiles.create');
    }
    public function edit($id){
      $ticketSqlFiles = ticketSqlFiles::find($id);
      return view('admin1.ticketSqlFiles.edit',compact("ticketSqlFiles"));
    }
     public function show($id){
        $ticketSqlFiles = ticketSqlFiles::find($id);
        return view('admin1.ticketSqlFiles.show',compact("ticketSqlFiles"));
    }
    public function store(CreateticketSqlFilesRequest $request)
    { 
        $ticketSqlFiles = $this->service->create($request->all());
        return redirect("ticketsqlfiles/edit/$ticketSqlFiles->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateticketSqlFilesRequest $request,$id)
    {
        $ticketSqlFiles = $this->service->update($request->all(),$id);
        return redirect("ticketsqlfiles/edit/$ticketSqlFiles->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("ticketsqlfiles/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\sqlDatabases;
use App\Http\Requests\CreatesqlDatabasesRequest;
use App\Http\Requests\UpdatesqlDatabasesRequest;
use App\Http\service\admin1\sqlDatabasesService;
use App\Http\Controllers\AppBaseController;

class sqlDatabasesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new sqlDatabasesService(); 
    }
    public function index()
    {
      $sqlDatabases = sqlDatabases::all();
      return view('admin1.sqlDatabases.index',compact("sqlDatabases"));
    }
    public function create(){
      return view('admin1.sqlDatabases.create');
    }
    public function edit($id){
      $sqlDatabases = sqlDatabases::find($id);
      return view('admin1.sqlDatabases.edit',compact("sqlDatabases"));
    }
     public function show($id){
        $sqlDatabases = sqlDatabases::find($id);
        return view('admin1.sqlDatabases.show',compact("sqlDatabases"));
    }
    public function store(CreatesqlDatabasesRequest $request)
    { 
        $sqlDatabases = $this->service->create($request->all());
        return redirect("sqldatabases/edit/$sqlDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatesqlDatabasesRequest $request,$id)
    {
        $sqlDatabases = $this->service->update($request->all(),$id);
        return redirect("sqldatabases/edit/$sqlDatabases->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("sqldatabases/index")->with('status', 'Cambios agregada correctamente');
    }  
}

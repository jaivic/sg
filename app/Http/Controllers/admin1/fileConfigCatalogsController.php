<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\fileConfigCatalogs;
use App\Http\Requests\CreatefileConfigCatalogsRequest;
use App\Http\Requests\UpdatefileConfigCatalogsRequest;
use App\Http\service\admin1\fileConfigCatalogsService;
use App\Http\Controllers\AppBaseController;

class fileConfigCatalogsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new fileConfigCatalogsService(); 
    }
    public function index()
    {
      $fileConfigCatalogs = fileConfigCatalogs::all();
      return view('admin1.fileConfigCatalogs.index',compact("fileConfigCatalogs"));
    }
    public function create(){
      return view('admin1.fileConfigCatalogs.create');
    }
    public function edit($id){
      $fileConfigCatalogs = fileConfigCatalogs::find($id);
      return view('admin1.fileConfigCatalogs.edit',compact("fileConfigCatalogs"));
    }
     public function show($id){
        $fileConfigCatalogs = fileConfigCatalogs::find($id);
        return view('admin1.fileConfigCatalogs.show',compact("fileConfigCatalogs"));
    }
    public function store(CreatefileConfigCatalogsRequest $request)
    { 
        $fileConfigCatalogs = $this->service->create($request->all());
        return redirect("fileconfigcatalogs/edit/$fileConfigCatalogs->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatefileConfigCatalogsRequest $request,$id)
    {
        $fileConfigCatalogs = $this->service->update($request->all(),$id);
        return redirect("fileconfigcatalogs/edit/$fileConfigCatalogs->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("fileconfigcatalogs/index")->with('status', 'Cambios agregada correctamente');
    }  
}

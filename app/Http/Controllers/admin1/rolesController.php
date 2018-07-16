<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\roles;
use App\Http\Requests\CreaterolesRequest;
use App\Http\Requests\UpdaterolesRequest;
use App\Http\service\admin1\rolesService;
use App\Http\Controllers\AppBaseController;

class rolesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new rolesService(); 
    }
    public function index()
    {
      $roles = roles::all();
      return view('admin1.roles.index',compact("roles"));
    }
    public function create(){
      return view('admin1.roles.create');
    }
    public function edit($id){
      $roles = roles::find($id);
      return view('admin1.roles.edit',compact("roles"));
    }
     public function show($id){
        $roles = roles::find($id);
        return view('admin1.roles.show',compact("roles"));
    }
    public function store(CreaterolesRequest $request)
    { 
        $roles = $this->service->create($request->all());
        return redirect("roles/edit/$roles->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdaterolesRequest $request,$id)
    {
        $roles = $this->service->update($request->all(),$id);
        return redirect("roles/edit/$roles->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("roles/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\permissionRole;
use App\Http\Requests\CreatepermissionRoleRequest;
use App\Http\Requests\UpdatepermissionRoleRequest;
use App\Http\service\admin1\permissionRoleService;
use App\Http\Controllers\AppBaseController;

class permissionRoleController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new permissionRoleService(); 
    }
    public function index()
    {
      $permissionRole = permissionRole::all();
      return view('admin1.permissionRole.index',compact("permissionRole"));
    }
    public function create(){
      return view('admin1.permissionRole.create');
    }
    public function edit($id){
      $permissionRole = permissionRole::find($id);
      return view('admin1.permissionRole.edit',compact("permissionRole"));
    }
     public function show($id){
        $permissionRole = permissionRole::find($id);
        return view('admin1.permissionRole.show',compact("permissionRole"));
    }
    public function store(CreatepermissionRoleRequest $request)
    { 
        $permissionRole = $this->service->create($request->all());
        return redirect("permissionrole/edit/$permissionRole->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdatepermissionRoleRequest $request,$id)
    {
        $permissionRole = $this->service->update($request->all(),$id);
        return redirect("permissionrole/edit/$permissionRole->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("permissionrole/index")->with('status', 'Cambios agregada correctamente');
    }  
}

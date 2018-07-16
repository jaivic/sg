<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\applicationUser;
use App\Http\Requests\CreateapplicationUserRequest;
use App\Http\Requests\UpdateapplicationUserRequest;
use App\Http\service\admin1\applicationUserService;
use App\Http\Controllers\AppBaseController;

class applicationUserController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new applicationUserService(); 
    }
    public function index()
    {
      $applicationUser = applicationUser::all();
      return view('admin1.applicationUser.index',compact("applicationUser"));
    }
    public function create(){
      return view('admin1.applicationUser.create');
    }
    public function edit($id){
      $applicationUser = applicationUser::find($id);
      return view('admin1.applicationUser.edit',compact("applicationUser"));
    }
     public function show($id){
        $applicationUser = applicationUser::find($id);
        return view('admin1.applicationUser.show',compact("applicationUser"));
    }
    public function store(CreateapplicationUserRequest $request)
    { 
        $applicationUser = $this->service->create($request->all());
        return redirect("applicationuser/edit/$applicationUser->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateapplicationUserRequest $request,$id)
    {
        $applicationUser = $this->service->update($request->all(),$id);
        return redirect("applicationuser/edit/$applicationUser->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("applicationuser/index")->with('status', 'Cambios agregada correctamente');
    }  
}

<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\autoTestRepos;
use App\Http\Requests\CreateautoTestReposRequest;
use App\Http\Requests\UpdateautoTestReposRequest;
use App\Http\service\admin1\autoTestReposService;
use App\Http\Controllers\AppBaseController;

class autoTestReposController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new autoTestReposService(); 
    }
    public function index()
    {
      $autoTestRepos = autoTestRepos::all();
      return view('admin1.autoTestRepos.index',compact("autoTestRepos"));
    }
    public function create(){
      return view('admin1.autoTestRepos.create');
    }
    public function edit($id){
      $autoTestRepos = autoTestRepos::find($id);
      return view('admin1.autoTestRepos.edit',compact("autoTestRepos"));
    }
     public function show($id){
        $autoTestRepos = autoTestRepos::find($id);
        return view('admin1.autoTestRepos.show',compact("autoTestRepos"));
    }
    public function store(CreateautoTestReposRequest $request)
    { 
        $autoTestRepos = $this->service->create($request->all());
        return redirect("autotestrepos/edit/$autoTestRepos->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateautoTestReposRequest $request,$id)
    {
        $autoTestRepos = $this->service->update($request->all(),$id);
        return redirect("autotestrepos/edit/$autoTestRepos->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("autotestrepos/index")->with('status', 'Cambios agregada correctamente');
    }  
}

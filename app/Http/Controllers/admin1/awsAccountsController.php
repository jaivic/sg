<?php

namespace App\Http\Controllers\admin1;

use App\Http\Models\admin1\awsAccounts;
use App\Http\Requests\CreateawsAccountsRequest;
use App\Http\Requests\UpdateawsAccountsRequest;
use App\Http\service\admin1\awsAccountsService;
use App\Http\Controllers\AppBaseController;

class awsAccountsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new awsAccountsService(); 
    }
    public function index()
    {
      $awsAccounts = awsAccounts::all();
      return view('admin1.awsAccounts.index',compact("awsAccounts"));
    }
    public function create(){
      return view('admin1.awsAccounts.create');
    }
    public function edit($id){
      $awsAccounts = awsAccounts::find($id);
      return view('admin1.awsAccounts.edit',compact("awsAccounts"));
    }
     public function show($id){
        $awsAccounts = awsAccounts::find($id);
        return view('admin1.awsAccounts.show',compact("awsAccounts"));
    }
    public function store(CreateawsAccountsRequest $request)
    { 
        $awsAccounts = $this->service->create($request->all());
        return redirect("awsaccounts/edit/$awsAccounts->id")
        ->with('status', 'Cambios agregada correctamente');
    }
    public function update(UpdateawsAccountsRequest $request,$id)
    {
        $awsAccounts = $this->service->update($request->all(),$id);
        return redirect("awsaccounts/edit/$awsAccounts->id")
        ->with('status', 'Cambios agregada correctamente');
    }
      public function delete($id)
    {        
        $this->service->delete($id);
        return redirect("awsaccounts/index")->with('status', 'Cambios agregada correctamente');
    }  
}

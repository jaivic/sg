<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\awsAccounts;
use App\Http\Requests\CreateawsAccountsAPIRequest;
use App\Http\Requests\UpdateawsAccountsAPIRequest;
use App\Http\service\admin1\awsAccountsService;
use App\Http\Controllers\AppBaseController;

class awsAccountsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new awsAccountsService(); 
    }
    public function store(CreateawsAccountsAPIRequest $Request)
    { 
      $awsAccounts = $this->service->create($Request->all());
      return $this->sendResponse($awsAccounts->toArray(), 'awsAccounts guardado exitosamente');
    }
    public function update(UpdateawsAccountsAPIRequest $Request,$id)
    {
       $awsAccounts = $this->service->update($Request->all(),$id);
       return $this->sendResponse($awsAccounts->toArray(), 'awsAccounts actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'awsAccounts eliminado correctamente');
    }

    
}

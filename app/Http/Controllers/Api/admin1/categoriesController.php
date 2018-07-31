<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\categories;
use App\Http\Requests\CreatecategoriesAPIRequest;
use App\Http\Requests\UpdatecategoriesAPIRequest;
use App\Http\service\admin1\categoriesService;
use App\Http\Controllers\AppBaseController;

class categoriesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new categoriesService(); 
    }
    public function store(CreatecategoriesAPIRequest $Request)
    { 
      $categories = $this->service->create($Request->all());
      return $this->sendResponse($categories->toArray(), 'categories guardado exitosamente');
    }
    public function update(UpdatecategoriesAPIRequest $Request,$id)
    {
       $categories = $this->service->update($Request->all(),$id);
       return $this->sendResponse($categories->toArray(), 'categories actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'categories eliminado correctamente');
    }
    public function show($id){
        $row = categories::find($id);
        $result= $row->toArray();
        
        
        
          return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    
}

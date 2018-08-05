<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\categories;
use Illuminate\Http\Request;


use App\Http\service\admin1\categoriesService;
use App\Http\Controllers\AppBaseController;

class categoriesController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new categoriesService(); 
    }
    public function store(Request $request)
    { 
      $categories = $this->service->create($request->all());
      return $this->sendResponse($categories->toArray(), 'categories guardado exitosamente');
    }
    public function update(Request $request,$id)
    {
       $categories = $this->service->update($request->all(),$id);
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
     public function all()
    {
        $row = categories::all();
        $result = $row->toArray();
        foreach ($row as $key => $value) {
           
        }
        
        return $this->sendResponse($result, 'success');
    }
    
}

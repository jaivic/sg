<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\comments;
use App\Http\Requests\CreatecommentsAPIRequest;
use App\Http\Requests\UpdatecommentsAPIRequest;
use App\Http\service\admin1\commentsService;
use App\Http\Controllers\AppBaseController;

class commentsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new commentsService(); 
    }
    public function store(CreatecommentsAPIRequest $Request)
    { 
      $comments = $this->service->create($Request->all());
      return $this->sendResponse($comments->toArray(), 'comments guardado exitosamente');
    }
    public function update(UpdatecommentsAPIRequest $Request,$id)
    {
       $comments = $this->service->update($Request->all(),$id);
       return $this->sendResponse($comments->toArray(), 'comments actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'comments eliminado correctamente');
    }
    public function show($id){
        $row = comments::find($id);
        $result= $row->toArray();
        
        
$result["posts"]=[];
if($row->posts()){
  $result["posts"]= $row->posts()->get();
}

$result["users"]=[];
if($row->users()){
  $result["users"]= $row->users()->get();
}

        
          return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    
}

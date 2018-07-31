<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\posts;
use App\Http\Requests\CreatepostsAPIRequest;
use App\Http\Requests\UpdatepostsAPIRequest;
use App\Http\service\admin1\postsService;
use App\Http\Controllers\AppBaseController;

class postsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new postsService(); 
    }
    public function store(CreatepostsAPIRequest $Request)
    { 
      $posts = $this->service->create($Request->all());
      return $this->sendResponse($posts->toArray(), 'posts guardado exitosamente');
    }
    public function update(UpdatepostsAPIRequest $Request,$id)
    {
       $posts = $this->service->update($Request->all(),$id);
       return $this->sendResponse($posts->toArray(), 'posts actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'posts eliminado correctamente');
    }
    public function show($id){
        $row = posts::find($id);
        $result= $row->toArray();
        $result["categories"] = [];
        if ($row->categories()) {
          $result["categories"] = $row->categories()->get();
        }
        $result["tags"] = [];
        if ($row->tags()) {
          $result["tags"] = $row->tags()->get();
        }

        $result["users"] = [];
        if ($row->users()) {
          $result["users"] = $row->users()->get();
        }


    return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    
}

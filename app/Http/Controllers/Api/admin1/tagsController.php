<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\tags;
use App\Http\Requests\CreatetagsAPIRequest;
use App\Http\Requests\UpdatetagsAPIRequest;
use App\Http\service\admin1\tagsService;
use App\Http\Controllers\AppBaseController;

class tagsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
      $this->service=new tagsService(); 
    }
    public function store(CreatetagsAPIRequest $Request)
    { 
      $tags = $this->service->create($Request->all());
      return $this->sendResponse($tags->toArray(), 'tags guardado exitosamente');
    }
    public function update(UpdatetagsAPIRequest $Request,$id)
    {
       $tags = $this->service->update($Request->all(),$id);
       return $this->sendResponse($tags->toArray(), 'tags actualizado exitosamente');
    }
      public function delete($id)
    {        
      $this->service->delete($id);
      return $this->sendResponse(null, 'tags eliminado correctamente');
    }
    public function show($id){
        $row = tags::find($id);
        $result= $row->toArray();
        
        
        
          return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    
}

<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\tags;
use Illuminate\Http\Request;


use App\Http\service\admin1\tagsService;
use App\Http\Controllers\AppBaseController;

class tagsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
        $this->service=new tagsService();
    }
    public function store(Request $request)
    {
        $tags = $this->service->create($request->all());
        return $this->sendResponse($tags->toArray(), 'tags guardado exitosamente');
    }
    public function update(Request $request, $id)
    {
        $tags = $this->service->update($request->all(), $id);
        return $this->sendResponse($tags->toArray(), 'tags actualizado exitosamente');
    }
    public function delete($id)
    {
        $this->service->delete($id);
        return $this->sendResponse(null, 'tags eliminado correctamente');
    }
    public function show($id)
    {
        $row = tags::find($id);
        $result= $row->toArray();
        
        
        
          return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    public function all()
    {
        $row = tags::all();
        $result = $row->toArray();
        foreach ($row as $key => $value) {
        }
        
        return $this->sendResponse($result, 'success');
    }
}

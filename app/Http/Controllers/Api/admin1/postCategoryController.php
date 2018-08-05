<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\postCategory;
use Illuminate\Http\Request;


use App\Http\service\admin1\postCategoryService;
use App\Http\Controllers\AppBaseController;

class postCategoryController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
        $this->service=new postCategoryService();
    }
    public function store(Request $request)
    {
        $postCategory = $this->service->create($request->all());
        return $this->sendResponse($postCategory->toArray(), 'postCategory guardado exitosamente');
    }
    public function update(Request $request, $id)
    {
        $postCategory = $this->service->update($request->all(), $id);
        return $this->sendResponse($postCategory->toArray(), 'postCategory actualizado exitosamente');
    }
    public function delete($id)
    {
        $this->service->delete($id);
        return $this->sendResponse(null, 'postCategory eliminado correctamente');
    }
    public function show($id)
    {
        $row = postCategory::find($id);
        $result= $row->toArray();
        
        
        $result["posts"]=[];
        if ($row->posts()) {
            $result["posts"]= $row->posts()->get();
        }

        $result["categories"]=[];
        if ($row->categories()) {
            $result["categories"]= $row->categories()->get();
        }

        
          return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    public function all()
    {
        $row = postCategory::all();
        $result = $row->toArray();
        foreach ($row as $key => $value) {
            $result[$key]["posts"] = [];
            if ($value->posts()) {
                $result[$key]["posts"]= $value->posts()->get();
            }
 


            $result[$key]["categories"] = [];
            if ($value->categories()) {
                $result[$key]["categories"]= $value->categories()->get();
            }
        }
        
        return $this->sendResponse($result, 'success');
    }
}

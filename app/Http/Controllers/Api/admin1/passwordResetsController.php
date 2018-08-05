<?php

namespace App\Http\Controllers\Api\admin1;

use App\Http\Models\admin1\passwordResets;
use Illuminate\Http\Request;


use App\Http\service\admin1\passwordResetsService;
use App\Http\Controllers\AppBaseController;

class passwordResetsController extends AppBaseController
{
    public $service;
  
    public function __construct()
    {
        $this->service=new passwordResetsService();
    }
    public function store(Request $request)
    {
        $passwordResets = $this->service->create($request->all());
        return $this->sendResponse($passwordResets->toArray(), 'passwordResets guardado exitosamente');
    }
    public function update(Request $request, $id)
    {
        $passwordResets = $this->service->update($request->all(), $id);
        return $this->sendResponse($passwordResets->toArray(), 'passwordResets actualizado exitosamente');
    }
    public function delete($id)
    {
        $this->service->delete($id);
        return $this->sendResponse(null, 'passwordResets eliminado correctamente');
    }
    public function show($id)
    {
        $row = passwordResets::find($id);
        $result= $row->toArray();
        
        
        
          return $this->sendResponse($result, 'success');
      //  return $this->sendResponse($row->toArray(), 'success');
    }
    public function all()
    {
        $row = passwordResets::all();
        $result = $row->toArray();
        foreach ($row as $key => $value) {
        }
        
        return $this->sendResponse($result, 'success');
    }
}

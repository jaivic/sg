<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\analisisAplicaciones;

class analisisAplicacionesService 
{

    public function create($data)
    {
        return analisisAplicaciones::create($data);
    }

    public function update($data,$id)
    {
        $analisisAplicaciones = analisisAplicaciones::findOrFail($id);
        $analisisAplicaciones->update($data);
        return $analisisAplicaciones;
    }
    public function delete($id)
    {
        $analisisAplicaciones = analisisAplicaciones::findOrFail($id);
        $analisisAplicaciones->delete();
        return $analisisAplicaciones;
    }

}

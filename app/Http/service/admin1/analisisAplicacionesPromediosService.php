<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\analisisAplicacionesPromedios;

class analisisAplicacionesPromediosService 
{

    public function create($data)
    {
        return analisisAplicacionesPromedios::create($data);
    }

    public function update($data,$id)
    {
        $analisisAplicacionesPromedios = analisisAplicacionesPromedios::findOrFail($id);
        $analisisAplicacionesPromedios->update($data);
        return $analisisAplicacionesPromedios;
    }
    public function delete($id)
    {
        $analisisAplicacionesPromedios = analisisAplicacionesPromedios::findOrFail($id);
        $analisisAplicacionesPromedios->delete();
        return $analisisAplicacionesPromedios;
    }

}

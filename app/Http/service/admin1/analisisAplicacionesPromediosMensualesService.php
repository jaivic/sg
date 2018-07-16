<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\analisisAplicacionesPromediosMensuales;

class analisisAplicacionesPromediosMensualesService 
{

    public function create($data)
    {
        return analisisAplicacionesPromediosMensuales::create($data);
    }

    public function update($data,$id)
    {
        $analisisAplicacionesPromediosMensuales = analisisAplicacionesPromediosMensuales::findOrFail($id);
        $analisisAplicacionesPromediosMensuales->update($data);
        return $analisisAplicacionesPromediosMensuales;
    }
    public function delete($id)
    {
        $analisisAplicacionesPromediosMensuales = analisisAplicacionesPromediosMensuales::findOrFail($id);
        $analisisAplicacionesPromediosMensuales->delete();
        return $analisisAplicacionesPromediosMensuales;
    }

}

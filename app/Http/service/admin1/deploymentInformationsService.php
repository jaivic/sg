<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\deploymentInformations;

class deploymentInformationsService 
{

    public function create($data)
    {
        return deploymentInformations::create($data);
    }

    public function update($data,$id)
    {
        $deploymentInformations = deploymentInformations::findOrFail($id);
        $deploymentInformations->update($data);
        return $deploymentInformations;
    }
    public function delete($id)
    {
        $deploymentInformations = deploymentInformations::findOrFail($id);
        $deploymentInformations->delete();
        return $deploymentInformations;
    }

}

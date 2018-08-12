<?php

namespace App\Http\Controllers;
use generator\base\gIndex;

use App\Http\Models\admin1\posts;
use App\Http\Models\admin1\tags;
use App\Http\Models\admin1\categories;
class aController extends AppBaseController
{
    public function autonew()
    {
      //  echo date("r");
        $x = new gIndex();
        $x->crear();
      
    }
    public function rollback()
    {
      //  echo date("r");
        $x = new gIndex();
        $x->rollback();
    }
public function pruebademodelo(){
/*$x= posts::find(1);
$result["post"] = $x;
// $result["post"]->user_id= $x->users()->get()[0]->name;
$result["user"] = $x->users()->get();
$result["categories"] = $x->categories()->get();
$result["tags"] = $x->tags()->get();
return $this->sendResponse($result, "") ;*/

        $row = posts::find(1);
        $result = $row->toArray();
      

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
}
}

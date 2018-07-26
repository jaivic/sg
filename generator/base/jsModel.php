<?php
namespace generator\base;
use DB;

use Illuminate\Support\Str;

use generator\base\BaseGenerator;
use generator\Utils\FileUtil;
use \Doctrine\DBAL\Types\Type;
class ojson {
 public $x;
public function __construct(){
    $this->x = new \stdClass();
    $this->x->enable = true;
    $this->x->nombre = "";
    $this->x->nombreParaHumano = "";
    $this->x->softdelete = true;
    $this->x->fieldDelete = "";
    $this->x->campo = [];
    $this->x->campoCrearUpdate = [];
    $this->x->campoShowlist = [];
    $this->x->indice = [];
    $this->x->dates = [];
}
public function addField(){
    $field = new \stdClass();
    $field->nombre = "" ;
    $field->nombreHumano = ""  ;
    $field->rule = [];
    $field->viewFill = "inputtext";  /*select,input,imagen*/
    $field->viewshow = "imagen";/*text,imagen*/
    $this->x->campo[]=$field;	
}


}
class jsModel extends BaseGenerator
{
  public $config;

public function __construct($config){
  parent::__construct();

    $this->config= $config;
  //  $this->rollbackDir( $this->config->dirFinalModel);
  
  $this->variables=[
    '$NAMESPACE_MODEL$'=> $this->config->nameSpaceFinalModel,
    '$NAMESPACE_MODEL_EXTEND$'=> "use Illuminate\Database\Eloquent\Model",
    '$DOCS$'=>"",
    '$RELATIONS$' =>"",
    '$PRIMARY$' => "",
    '$RULES$' => "", 
    '$TIMESTAMPS$' => "",
    '$SOFT_DELETE_IMPORT$' => "",
    '$SOFT_DELETE$' => "",
    '$SOFT_DELETE_DATES$' => ""
  ];
}

    public function run()
  {
   $s= new ojson();
    $s->addField();
    dd(json_encode ($s));
  }

   
}
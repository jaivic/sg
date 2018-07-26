<?php

namespace generator\gsg\oBase;
use Illuminate\Support\Str;


class fieldModel{
  
  public  $field;
  
  public function __construct($name,$type){
      $this->field = new \stdClass();
      $this->field->name = $name;
      $this->field->type = $type;
      $this->field->humanName = Str::snake(Str::camel($name));
  }
  public function addRule($rule){
      $this->field->rule =$rule;
  }
  public function addWebViewFill($name="text",$data=""){
    $a = new \stdClass();
    $a->name=$name;
    $a->data=$data;
    $this->field->viewFill =$a;
  }

  public function adddWebViewShow($name="text"){
    $this->field->viewShow =$name;
  }

  public function setWebView($type){
    if ($type=="text"){
      $this->addWebViewFill("text","");
      $this->adddWebViewShow("text");
    }
  }
}
<?php
namespace generator\gsg\oBase;
use Illuminate\Support\Str;
class model {
  public $x;
  public function __construct($table){
      $this->x = new \stdClass();
      $this->x->enable = true;
      $this->x->request = true;
      $this->x->name = Str::camel($table);
      $this->x->humanName = Str::snake(Str::camel($table));
   /*   $this->x->timeStamp=true;
      $this->x->softdelete = true;
      $this->x->fieldDelete = "delete_at";*/
      $this->x->field = [];
      $this->x->fieldCreatedUpdate = [];
      $this->x->fieldShowlist = [];
      $this->x->index = [];
      $this->x->dates = [];
  }
  public function addField($field){
    $this->x->field[]=$field;	
  }
  public function addFieldForCreatedUpdate($name){
    $this->x->fieldCreatedUpdate[] =$name;
  }
  public function addfieldShowList($name){
    $this->x->fieldShowList[] =$name;
  }
  public function addIndex($name){
    $this->x->index[] = $name;
  }
  public function addDate($name){
    $this->x->dates[] = $name;
  }
}
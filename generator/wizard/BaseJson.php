<?php
namespace generator\wizard;

use DB;


use Illuminate\Support\Str;





/* clase encargada de crear el json con la data de inicial de las tablas */
class Table extends \stdClass
{
  public $enable = true;
  public $name = "";
  public $option = [];

  public function __construct($nameTable)
  {
    $this->name = Str::camel($nameTable);

  }
  public function addOption($name, $value)
  {
    $this->option[$name] = $value;
  }
}

class BaseJson
{

  public function createTables($config)
  {

  }

}
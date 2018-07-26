<?php
namespace generator\base;
use DB;


use Illuminate\Support\Str;
use generator\Utils\FileUtil;
use \Doctrine\DBAL\Types\Type;
use generator\gsg\oBase\model;
use generator\base\BaseGenerator;
use generator\gsg\oBase\fieldModel;

class jsModel extends BaseGenerator
{
public $config;


    public function run($config)
  {
    $this->config=$config;
    $all=[];
    foreach($this->config->listTable as $Table){
    $model= new model($Table->getName());
      foreach ($Table->getColumns() as $field) {  
        $fieldforSave=new fieldModel($field->getName(),$this->generateCasts($field->getType()) );
        $fieldforSave->addRule($this->generateRule($field));
        $fieldforSave->setWebView("text");
        $model->addField($fieldforSave);
      }
      $all[]=$model;
      dd ($all);
    }
  
  }
  public  function generateRule($field)
  {
  
    $item=[];
    if($field->getNotnull()==true){
      $item[] = "required";
    }

    if ($field->getType() == Type::getType('string')){
      $item[] = "max:".$field->getLength();
    }
   
    return $item;
    

  }
  public function generateCasts($type)
  {
      $casts = [];
        /*dd(Type::getTypesMap());
        "array" => "Doctrine\DBAL\Types\ArrayType"
        "simple_array" => "Doctrine\DBAL\Types\SimpleArrayType"
        "json_array" => "Doctrine\DBAL\Types\JsonArrayType"
        "json" => "Doctrine\DBAL\Types\JsonType"
        "object" => "Doctrine\DBAL\Types\ObjectType"
        "boolean" => "Doctrine\DBAL\Types\BooleanType"
        "integer" => "Doctrine\DBAL\Types\IntegerType"
        "smallint" => "Doctrine\DBAL\Types\SmallIntType"
        "bigint" => "Doctrine\DBAL\Types\BigIntType"
        "string" => "Doctrine\DBAL\Types\StringType"
        "text" => "Doctrine\DBAL\Types\TextType"
        "datetime" => "Doctrine\DBAL\Types\DateTimeType"
        "datetime_immutable" => "Doctrine\DBAL\Types\DateTimeImmutableType"
        "datetimetz" => "Doctrine\DBAL\Types\DateTimeTzType"
        "datetimetz_immutable" => "Doctrine\DBAL\Types\DateTimeTzImmutableType"
        "date" => "Doctrine\DBAL\Types\DateType"
        "date_immutable" => "Doctrine\DBAL\Types\DateImmutableType"
        "time" => "Doctrine\DBAL\Types\TimeType"
        "time_immutable" => "Doctrine\DBAL\Types\TimeImmutableType"
        "decimal" => "Doctrine\DBAL\Types\DecimalType"
        "float" => "Doctrine\DBAL\Types\FloatType"
        "binary" => "Doctrine\DBAL\Types\BinaryType"
        "blob" => "Doctrine\DBAL\Types\BlobType"
        "guid" => "Doctrine\DBAL\Types\GuidType"
        "dateinterval" => "Doctrine\DBAL\Types\DateIntervalType"
        */
        // $timestamps = TableFieldsGenerator::getTimestampFieldNames();

        /*    if (in_array($field->name, $timestamps)) {
        continue;
        }*/

      $rule = "";

      switch ($type) {
      
        case Type::getType('bigint') :
        $rule .= "'bigint'";
        break;
        case Type::getType('integer'):
          $rule .= "'integer'";
          break;
        case Type::getType('decimal'):
          $rule .= "'double'";
          break;
        case Type::getType('float'):
          $rule .= "'float'";
          break;
        case Type::getType('boolean'):
          $rule .= "'boolean'";
          break;
        case Type::getType('datetime'):
        case Type::getType ('datetimetz'):
          $rule .= "'datetime'";
          break;
        case Type::getType('date'):
          $rule .= "'date'";
          break;
       // case Type::getType('enum'):
        case Type::getType ('string'):
     //   case Type::getType ('char'):
        case Type::getType ('text'):
          $rule .= "'string'";
          break;
        default:
          $rule = '';
          break;
      }

      if (empty($rule)) {
        //$casts[] = $rule;
        return null;
      }
    

    return $rule;
  }

}
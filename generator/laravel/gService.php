<?php
namespace generator\base;
use DB;

use Illuminate\Support\Str;

use generator\Utils\FileUtil;
use \Doctrine\DBAL\Types\Type;


use generator\base\BaseGenerator;

class gService extends BaseGenerator
{



  public function __construct($config){
    parent::__construct();

    $this->config = $config;
  // $this->rollbackDir( $this->config->dirFinalService);
    $this->variables=[
      '$NAMESPACE$'=>$this->config->nameSpaceFinalService
    ];
  }
  public function run()
  {    
    foreach ($this->config->listTable as $Table) {
    
      $name= Str::camel($Table->getName());
      $this->variables['$NAMESPACE_MODEL$'] = $this->config->nameSpaceFinalModel."\\". $name;
      $this->variables['$CLASS_NAME$']= $name;
      $this->variables['$MODAL_NAME$'] = $name;
      $name .=  "Service.php";
      $templateData=   $this->getTemplate($this->config->pathTemplateService);
      $this->createFileWithTemplate( $this->config->dirFinalService, $name, $this->variables, $templateData);
    }
  }
  
}
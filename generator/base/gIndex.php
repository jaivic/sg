<?php

namespace generator\base;

use DB;

use Illuminate\Support\Str;

use generator\Utils\FileUtil;
use \Doctrine\DBAL\Types\Type;
use generator\base\gConfig;
use generator\base\BaseGenerator;
use generator\base\gModel;
use generator\base\gController;
use generator\base\gRequest;
use generator\base\gService;
use generator\base\gView;
use generator\base\gRoute;
use generator\base\gViewMenu;

class gIndex extends BaseGenerator
{
    public function __construct()
    {
        $this->schemaManager = DB::getDoctrineSchemaManager();
        $platform = $this->schemaManager->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');
        $platform->registerDoctrineTypeMapping('json', 'text');
        $this->listTable = $this->schemaManager->listTables();
        $config=new gConfig($this->listTable,"admin1");
      /*  foreach ($this->listTable as $Table) {
            dd($Table);
            $column = $this->schemaManager->listTableDetails($Table)->getPrimaryKey();
            dd($column);
        }
        /**/
       // (new gRoute($config))->run();
        //(new gModel($config))->run();
        //(new gRequest($config))->run();

       // (new gService($config))->run();
       // (new gController($config))->run();
       // (new gView($config))->run();
            (new gView($config))->run();
    }
 
   
}

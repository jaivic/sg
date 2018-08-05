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

use generator\base\gService;
use generator\base\gView;
use generator\base\gRoute;
use generator\base\gViewMenu;
use generator\base\jsModel;

use generator\laravel\gModelEloquent;
use generator\laravel\gRouteLaravel;
use generator\laravel\gControllerLaravel;
use generator\laravel\gModelIOS;
use generator\laravel\gRequestLaravel;

use generator\laravel\gServiceLaravel;

class gIndex extends BaseGenerator
{
    public function __construct()
    {
   /* $config = new gConfig([], "admin1");
    $this->rollBackAll($config);
    dd(1);*/
        $this->schemaManager = DB::getDoctrineSchemaManager();
        $platform = $this->schemaManager->getDatabasePlatform();

        $platform->registerDoctrineTypeMapping('enum', 'string');
        $platform->registerDoctrineTypeMapping('json', 'text');
      /* $this->listTable = $this->schemaManager->listTables();
        $config = new gConfig($this->listTable, "admin1");
           (new jsModel())->run($config,"");
    dd(1);*/
        $this->listTable= json_decode(file_get_contents(base_path("generator/gsg/configJson/model.json")));

        $config=new gConfig($this->listTable, "admin1");
        (new gModelEloquent($config))->run();
        (new gControllerLaravel($config))->run();
        (new gModelIOS($config))->run();
        (new gRequestLaravel($config))->run();
        (new gRouteLaravel($config))->run();
        (new gServiceLaravel($config))->run();
        
        // (new jsModel())->run($config,"");
        //$this->rollBackAll( $config);
        //dd("pues si");
       /*     (new gRoute($config))->run();
            (new gModel($config))->run();
            (new gRequest($config))->run();

            (new gService($config))->run();
            (new gController($config))->run();
            (new gView($config))->run();
            (new gViewMenu($config))->run();*/
    }
 
    public function rollBackAll($config)
    {
        $this->rollbackDir($config->dirFinalApiController);
        $this->rollbackDir($config->dirFinalController);
        $this->rollbackDir($config->dirFinalModel);
        $this->rollbackDir($config->dirFinalRequest);
        $this->rollbackDir($config->dirFinalService);
        $this->rollbackDir($config->dirFinalBaseView);

        $path = base_path("resources/views/layouts/");
        $this->rollbackFile($path, "menu.blade.php");
    }
}

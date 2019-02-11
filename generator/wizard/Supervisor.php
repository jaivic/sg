<?php

namespace generator\wizard;

use generator\wizard\BaseJson;
use DB;
use generator\Utils\FileUtil;

class Supervisor
{
    public $variables;
    public $listTable;
    public $dirFinalModel;
    public $nameSpaceFinalModel;
    public $dirFinalRequest;
    public $nameSpaceFinalRequest;
    public $dirFinalService;
    public $nameSpaceFinalEervice;
    public $dirFinalController;
    public $nameSpaceFinalController;
    public $pathTemplateModel;
    public $pathTemplateService;

    public function __construct($addDir = "")
    {
        $this->schemaManager = DB::getDoctrineSchemaManager();
        $platform = $this->schemaManager->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');
        $platform->registerDoctrineTypeMapping('json', 'text');
        $this->listTable = $this->schemaManager->listTables();

        $this->addDir = $addDir;
        $this->route = base_path("routes/web.php");
        $this->dirJsonFile = base_path("generator/gsg/configJson/");
        $this->routeTemplate = "generator/template/routes/api_routes_group.stub";
        $this->pathTemplateModel = "generator/template/model/model.stub";
        $this->pathTemplateModelIOS = "generator/template/IOS/model.stub";
        $this->pathTemplateModelRelate = "generator/template/model/relationship.stub";
        $this->pathTemplateModelRelateMTOM = "generator/template/model/relationshipMTOM.stub";
        $this->pathTemplateModelSyncMTOM = "generator/template/model/synMtom.stub";
        $this->pathTemplateModelSync1to1 = "generator/template/model/syn1to1.stub";
        $this->pathTemplateModelSync1tom = "generator/template/model/syn1tom.stub";
        $this->pathTemplateService = "generator/template/service/service.stub";
        $this->pathTemplateCreate = "generator/template/request/create_request.stub";
        $this->pathTemplateUpdate = "generator/template/request/update_request.stub";
        $this->pathTemplateAPICreate = "generator/template/request/create_api_request.stub";
        $this->pathTemplateAPIUpdate = "generator/template/request/update_api_request.stub";
        $this->pathTemplateController = "generator/template/controllers/Controller.stub";
        $this->pathTemplateControllerPartResult = "generator/template/controllers/partResult.stub";
        $this->pathTemplateControllerPartResultArray = "generator/template/controllers/partResultArray.stub";
        $this->pathTemplateTest = "generator/template/test/test.stub";
        $this->pathTemplateTestItem = "generator/template/test/item.stub";
        $this->pathTemplateApiController = "generator/template/controllers/apiController.stub";
        $this->pathTemplateViewCreate = "generator/template/view/create.stub";
        $this->pathTemplateViewUpdate = "generator/template/view/edit.stub";

        $this->dirFinalModel = base_path("App\Http\Models\\");
        $this->nameSpaceFinalModel = "App\Http\Models";
        $this->dirFinalController = base_path("App\Http\Controllers\\");
        $this->dirFinalApiController = base_path("App\Http\Controllers\Api\\");
        $this->nameSpaceFinalController = "App\Http\Controllers";
        $this->nameSpaceFinalApiController = "App\Http\Controllers\Api";
        $this->nameSpaceFinalService = "App\Http\service";
        $this->dirFinalService = base_path("App\Http\service\\");
        $this->dirFinalTest = base_path("tests\Feature\\");
        $this->nameSpaceFinalRequest = "App\Http\Requests";
        $this->dirFinalRequest = base_path("App\Http\Requests\\");
        $this->dirFinalBaseView = base_path("resources\\views\\");
        $this->dirFinalBaseIOS = base_path("IOS\\");
        if ($addDir != "") {
            $this->dirFinalBaseView .= $addDir . "\\";
            $this->dirFinalController .= $addDir . "\\";
            $this->dirFinalApiController .= $addDir . "\\";
            $this->nameSpaceFinalController .= "\\" . $addDir;
            $this->nameSpaceFinalApiController .= "\\" . $addDir;;
            $this->dirFinalModel .= $addDir . "\\";
            $this->nameSpaceFinalModel .= "\\" . $addDir;
            $this->dirFinalService .= $addDir . "\\";
            $this->nameSpaceFinalService .= "\\" . $addDir;
        }
        $this->variables = [
            '$NAMESPACE_MODEL$' => $this->nameSpaceFinalModel,
            '$NAMESPACE_MODEL_EXTEND$' => "use Illuminate\Database\Eloquent\Model",
            '$NAMESPACE_API_REQUEST$' => "App\Http\Requests",
            '$DOCS$' => "",
            '$RELATIONS$' => "",
            '$PRIMARY$' => "",
            '$RULES$' => "",
            '$TIMESTAMPS$' => "",
            '$SOFT_DELETE_IMPORT$' => "",
            '$SOFT_DELETE$' => "",
            '$SOFT_DELETE_DATES$' => "",
            '$MODEL_NAME$' => "",
            '$TABLE_NAME$',
            '$FIELDS$' => "",
            '$CAST$' => "",
            '$DATES$' => "",
        ];
        $this->variables = [];
    }
    /** creaun un arreglo que conteine todas las tablas de la bd */
    public function createTables()
    {
        foreach ($this->listTable as $Table) {
            $this->listTableObj[] = new Table($Table->getName());
        }
        return json_encode($this->listTableObj);
    }
    public function fileCreateTable()
    {
        FileUtil::createFile($this->dirJsonFile, "tablas.json", json_encode($this->listTableObj));
    }
}

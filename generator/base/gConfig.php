<?php
namespace generator\base;
class gConfig
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

        public function __construct($listTable, $addDir = "")
    {
        $this->listTable = $listTable;
        $this->addDir= $addDir;
        $this->pathTemplateModel = "generator/template/model/model.stub";
        $this->pathTemplateService = "generator/template/service/service.stub";
        $this->pathTemplateCreate = "generator/template/request/create_request.stub";
        $this->pathTemplateUpdate = "generator/template/request/update_request.stub";
        $this->pathTemplateAPICreate = "generator/template/request/create_api_request.stub";
        $this->pathTemplateAPIUpdate = "generator/template/request/update_api_request.stub";
        $this->pathTemplateController = "generator/template/controllers/Controller.stub";
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
        $this->nameSpaceFinalRequest = "App\Http\Requests";
        $this->dirFinalRequest = base_path("App\Http\Requests\\");
        $this->dirFinalBaseView = base_path("resources\\views\\");
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

    }
}
<?php
namespace generator\laravel;

use DB;

use Illuminate\Support\Str;

use generator\Utils\FileUtil;
use \Doctrine\DBAL\Types\Type;


use generator\base\BaseGenerator;

class gTestLaravel extends BaseGenerator
{

    public function __construct($config)
    {
        parent::__construct();

        $this->config = $config;
        $this->variables = [
            '$NAMESPACE$' => $this->config->nameSpaceFinalService
        ];
    }
    private function generateFields($Table)
    {
        $fields = [];

        foreach ($Table->field as $field) {
            $_at = false;
            if (!in_array($field->name, $this->config->noColumn)) {
                if ($field->name == "created_at") {
                    $_at = true;
                }
                if ($field->name == "updated_at") {
                    $_at = true;
                }
                if ($field->name == "deleted_at") {
                    $_at = true;
                }
                if ($_at == false) {
                    $fieldData = "'" . $field->name . "' => " . '$fake->';
                    switch ($field->type) {
                        case "'boolean'":
                        case "'integer'":
                        case "'float'":
                            $fakerData = 'randomDigitNotNull';
                            break;
                        case "'string'":
                            $fakerData = 'word';
                            break;
                        case "'text'":
                            $fakerData = 'text';
                            break;
                        case "'datetime'":
                            $fakerData = "date('Y-m-d H:i:s')";
                            break;
                        default:
                            $fakerData = 'word';
                    }

                    $fieldData .= $fakerData;

                    $fields[] = $fieldData;
                }
            }
        }
        return $fields;
    }

    public function preData($table)
    {
        $fields = [];
        $texto = "";
        foreach ($table->foreignKeys as $field) {

            $variables['$MODEL_NAME$'] = $field->name;
            $variables['$KEY_FIELD$'] = $field->localIndex[0];
            $templateData = $this->getTemplate($this->config->pathTemplateTestItem);
            $texto .= $this->fillTemplate($variables, $templateData);
        }
        return $texto;
    }
    public function preVariables($table)
    {
        $fields = [];
        $texto = "";
        foreach ($table->foreignKeys as $field) {
            $texto .= "public \$". $field->localIndex[0].";\n";
        }
        return $texto;
    }
    public function run()
    {
        foreach ($this->config->listTable as $table) {
            echo $table->name;
            $this->preData($table);
            if ($table->enable == true) {
                $name = $table->name;
                $fillables = $this->generateFields($table);
                $this->variables['/*$FIELDS$*/'] = implode(',', $fillables);
                $this->variables['$MODEL_NAME$'] = $name;
                $this->variables['/*$ADD_DATA$*/'] = $this->preData($table);
                $this->variables['/*$ADD_VAR$*/'] = $this->preVariables($table);
                $name .= "Test.php";
                $templateData = $this->getTemplate($this->config->pathTemplateTest);
                $this->createFileWithTemplate($this->config->dirFinalTest, $name, $this->variables, $templateData);
            }
        }
    }
}

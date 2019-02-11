<?php
namespace App\Http\Controllers\Wizard;

use App\Sg\SgController;
use generator\wizard\Supervisor;

class WizardController extends SgController
{
    public function stepOne()
    {
        $supervisor = new supervisor();

        $tables = $supervisor->createTables();
        return view('wizard.stepOne', compact("tables"));
    }
    public function stepUnosave(Request $request)
    {
        $tables = $request->all();
        /* escribes en disco el archivo  */
        return view('wizard.stepTwo', compact("tables"));
    }
    public function stepTwo(Request $request)
    {
        $tables = $request->all();
        /* escribes en disco el archivo  */
        return view('wizard.stepTwo', compact("tables"));
    }
}

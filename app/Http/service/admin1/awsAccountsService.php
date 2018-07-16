<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\awsAccounts;

class awsAccountsService 
{

    public function create($data)
    {
        return awsAccounts::create($data);
    }

    public function update($data,$id)
    {
        $awsAccounts = awsAccounts::findOrFail($id);
        $awsAccounts->update($data);
        return $awsAccounts;
    }
    public function delete($id)
    {
        $awsAccounts = awsAccounts::findOrFail($id);
        $awsAccounts->delete();
        return $awsAccounts;
    }

}

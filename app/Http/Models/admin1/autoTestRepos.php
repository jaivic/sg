<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class auto_test_repos extends Model
{
    
    public $table = 'autoTestRepos';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'name',
    'application_id'
    ];


    
}

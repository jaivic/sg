<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class quality_tests_nodes extends Model
{
    
    public $table = 'qualityTestsNodes';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ip',
    'url',
    'qualitytest_id'
    ];


    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class environments extends Model
{
    use SoftDeletes;
    public $table = 'environments';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'application_id',
    'name'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function applications()
{
return $this->hasOne("App\Http\Models\admin1\applications","id","application_id");
}
}

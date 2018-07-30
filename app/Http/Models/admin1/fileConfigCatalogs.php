<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class file_config_catalogs extends Model
{
    use SoftDeletes;
    public $table = 'fileConfigCatalogs';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'application_id',
    'environment_id',
    'storage',
    'filename'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function applications()
{
return $this->hasOne("App\Http\Models\admin1\applications","id","application_id");
}/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
**/
public function tickets()
{
return $this->belongsToMany("App\Http\Models\admin1\tickets","file_config_catalog_ticket","file_config_catalog_id","ticket_id");
}
}

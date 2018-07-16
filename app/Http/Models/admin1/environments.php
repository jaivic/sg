<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class environments extends Model
{
    use SoftDeletes;
    public $table = 'environments';
    public $timestamps = false;

    
    
    public $date = [ 
    'deleted_at' ];
    public $fillable = [
        
    'id',
    'application_id',
    'name',
    'created_at',
    'updated_at',
    'deleted_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'application_id' => 'integer',
    'name' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime'
    ];

    
}

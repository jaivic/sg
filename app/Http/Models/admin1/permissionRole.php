<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class permissionRole extends Model
{
    use SoftDeletes;
    public $table = 'permission_role';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'permission_id',
    'role_id'
    ];

    protected $casts = [
        
    'permission_id' => 'integer',
    'role_id' => 'integer'
    ];

    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class roleUser extends Model
{
    use SoftDeletes;
    public $table = 'role_user';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'user_id',
    'role_id'
    ];

    protected $casts = [
        
    'user_id' => 'integer',
    'role_id' => 'integer'
    ];

    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class passwordResets extends Model
{
    use SoftDeletes;
    public $table = 'password_resets';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'email',
    'token',
    'created_at'
    ];

    protected $casts = [
        
    'email' => 'string',
    'token' => 'string',
    'created_at' => 'datetime'
    ];

    
}

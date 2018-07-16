<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class mailingLists extends Model
{
    use SoftDeletes;
    public $table = 'mailing_lists';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'user_id',
    'name',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'user_id' => 'integer',
    'name' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

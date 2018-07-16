<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class reportEmails extends Model
{
    use SoftDeletes;
    public $table = 'report_emails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'name',
    'email',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'name' => 'string',
    'email' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

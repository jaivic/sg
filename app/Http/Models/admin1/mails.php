<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class mails extends Model
{
    use SoftDeletes;
    public $table = 'mails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'mailing_list_id',
    'mail',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'mailing_list_id' => 'integer',
    'mail' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

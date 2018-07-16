<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class slackChannels extends Model
{
    use SoftDeletes;
    public $table = 'slack_channels';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'id',
    'application_id',
    'name',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'application_id' => 'integer',
    'name' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

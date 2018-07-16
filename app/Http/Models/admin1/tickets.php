<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class tickets extends Model
{
    use SoftDeletes;
    public $table = 'tickets';
    public $timestamps = false;

    
    
    public $date = [ 
    'scheduled_at',
    'executed_at' ];
    public $fillable = [
        
    'id',
    'user_id',
    'aproved_by',
    'application_id',
    'environment_id',
    'old_id',
    'type',
    'status',
    'scheduled_at',
    'executed_at',
    'description',
    'observation',
    'created_at',
    'updated_at',
    'emergency_level'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'user_id' => 'integer',
    'aproved_by' => 'integer',
    'application_id' => 'integer',
    'environment_id' => 'integer',
    'old_id' => 'integer',
    'type' => 'string',
    'status' => 'string',
    'scheduled_at' => 'datetime',
    'executed_at' => 'datetime',
    'description' => 'string',
    'observation' => 'string',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'emergency_level' => 'boolean'
    ];

    
}

<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class workflows extends Model
{
    use SoftDeletes;
    public $table = 'workflows';
    public $timestamps = false;

    
    
    public $date = [ 
    'approved_at' ];
    public $fillable = [
        
    'id',
    'ticket_id',
    'user_id',
    'approved',
    'approved_at',
    'condition',
    'group',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'ticket_id' => 'integer',
    'user_id' => 'integer',
    'approved' => 'boolean',
    'approved_at' => 'datetime',
    'condition' => 'boolean',
    'group' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

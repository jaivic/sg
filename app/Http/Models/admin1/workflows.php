<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class workflows extends Model
{
    
    public $table = 'workflows';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ticket_id',
    'user_id',
    'approved',
    'approved_at',
    'condition',
    'group'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function tickets()
{
return $this->hasOne("App\Http\Models\admin1\tickets","id","ticket_id");
}
}

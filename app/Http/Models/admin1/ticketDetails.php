<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class ticket_details extends Model
{
    
    public $table = 'ticketDetails';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ticket_id',
    'name',
    'value'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function tickets()
{
return $this->hasOne("App\Http\Models\admin1\tickets","id","ticket_id");
}
}

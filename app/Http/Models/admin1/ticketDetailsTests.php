<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class ticket_details_tests extends Model
{
    
    public $table = 'ticketDetailsTests';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'ticket_id',
    'quality_tests_id',
    'status',
    'details'
    ];


    /**
* @return \Illuminate\Database\Eloquent\Relations\HasOne
**/
public function tickets()
{
return $this->hasOne("App\Http\Models\admin1\tickets","id","ticket_id");
}
}

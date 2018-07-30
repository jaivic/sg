<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class deployment_informations extends Model
{
    
    public $table = 'deploymentInformations';
    public $timestamps = false;

    
    
    public $date = [  ];
    public $fillable = [
        
    'deployment_id',
    'application_name',
    'deployment_group_name',
    'deployment_config_name',
    'creator',
    'start_time',
    'complete_time',
    'deployment_overview',
    'description',
    'error_information_code',
    'error_information_message',
    'ignore_application_stop_failures',
    'revision_github_location_commitId',
    'revision_github_location_repository',
    'revision_type',
    's3_location_bucket',
    's3_location_bundle_type',
    's3_location_etag',
    's3_location_key',
    's3_location_version',
    'status'
    ];


    
}

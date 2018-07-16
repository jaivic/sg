<?php

namespace App\Http\Models\admin1;

use Illuminate\Database\Eloquent\Model; 


class deploymentInformations extends Model
{
    
    public $table = 'deployment_informations';
    public $timestamps = false;

    
    
    public $date = [ 
    'start_time',
    'complete_time' ];
    public $fillable = [
        
    'id',
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
    'status',
    'created_at',
    'updated_at'
    ];

    protected $casts = [
        
    'id' => 'integer',
    'deployment_id' => 'string',
    'application_name' => 'string',
    'deployment_group_name' => 'string',
    'deployment_config_name' => 'string',
    'creator' => 'string',
    'start_time' => 'datetime',
    'complete_time' => 'datetime',
    'deployment_overview' => 'string',
    'description' => 'string',
    'error_information_code' => 'string',
    'error_information_message' => 'string',
    'ignore_application_stop_failures' => 'boolean',
    'revision_github_location_commitId' => 'string',
    'revision_github_location_repository' => 'string',
    'revision_type' => 'string',
    's3_location_bucket' => 'string',
    's3_location_bundle_type' => 'string',
    's3_location_etag' => 'string',
    's3_location_key' => 'string',
    's3_location_version' => 'string',
    'status' => 'boolean',
    'created_at' => 'datetime',
    'updated_at' => 'datetime'
    ];

    
}

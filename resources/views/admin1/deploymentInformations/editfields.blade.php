<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_id', 'deploymentId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('application_name', 'applicationName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('application_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_group_name', 'deploymentGroupName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_group_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_config_name', 'deploymentConfigName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_config_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('creator', 'creator:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('creator', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('start_time', 'startTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('start_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('complete_time', 'completeTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('complete_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_overview', 'deploymentOverview:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_overview', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('description', 'description:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('description', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('error_information_code', 'errorInformationCode:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('error_information_code', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('error_information_message', 'errorInformationMessage:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('error_information_message', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('ignore_application_stop_failures', 'ignoreApplicationStopFailures:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('ignore_application_stop_failures', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('revision_github_location_commitId', 'revisionGithubLocationCommitId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('revision_github_location_commitId', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('revision_github_location_repository', 'revisionGithubLocationRepository:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('revision_github_location_repository', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('revision_type', 'revisionType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('revision_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_location_bucket', 's3LocationBucket:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_location_bucket', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_location_bundle_type', 's3LocationBundleType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_location_bundle_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_location_etag', 's3LocationEtag:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_location_etag', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_location_key', 's3LocationKey:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_location_key', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_location_version', 's3LocationVersion:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_location_version', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('created_at', 'createdAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('created_at', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('updated_at', 'updatedAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('updated_at', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('deploymentinformations.index') !!}" class="btn btn-default">Cancel</a>
</footer>
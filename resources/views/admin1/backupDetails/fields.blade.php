<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('backup_id', 'backupId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('backup_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('database_name', 'databaseName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('database_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('mode', 'mode:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('mode', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('files', 'files:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('files', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_path', 's3Path:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_path', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('start_time', 'startTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('start_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('completed_time', 'completedTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('completed_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('duration', 'duration:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('duration', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('log_error', 'logError:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('log_error', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('zip_start_time', 'zipStartTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('zip_start_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('zip_completed_time', 'zipCompletedTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('zip_completed_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_start_time', 's3StartTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_start_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('s3_completed_time', 's3CompletedTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('s3_completed_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('size_in_gb', 'sizeInGb:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('size_in_gb', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('observations', 'observations:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('observations', null, ['class' => 'input-xs']) !!}
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
</section><section>
    {!! Form::label('relaunch', 'relaunch:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('relaunch', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('relanzar', 'relanzar:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('relanzar', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backupdetails.index') !!}" class="btn btn-default">Cancel</a>
</footer>
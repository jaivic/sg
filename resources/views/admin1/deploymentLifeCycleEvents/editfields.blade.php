<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_instance_summary_id', 'deploymentInstanceSummaryId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_instance_summary_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('diagnostics_error_code', 'diagnosticsErrorCode:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('diagnostics_error_code', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('diagnostics_log_tail', 'diagnosticsLogTail:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('diagnostics_log_tail', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('diagnostics_message', 'diagnosticsMessage:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('diagnostics_message', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('diagnostics_script_name', 'diagnosticsScriptName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('diagnostics_script_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('lifecycle_event_name', 'lifecycleEventName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('lifecycle_event_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('start_time', 'startTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('start_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('end_time', 'endTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('end_time', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('deploymentlifecycleevents.index') !!}" class="btn btn-default">Cancel</a>
</footer>
<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('schedule_id', 'scheduleId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('schedule_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('instance_name', 'instanceName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('instance_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('backup_type', 'backupType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('backup_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('origin', 'origin:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('origin', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('log_error', 'logError:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('log_error', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('execution_time', 'executionTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('execution_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('observations', 'observations:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('observations', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('is_mirror', 'isMirror:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('is_mirror', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('mirror_instance', 'mirrorInstance:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('mirror_instance', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('ticket_id', 'ticketId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('ticket_id', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('relanzar', 'relanzar:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('relanzar', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backups.index') !!}" class="btn btn-default">Cancel</a>
</footer>
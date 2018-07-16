<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('user_id', 'userId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('user_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('aproved_by', 'aprovedBy:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('aproved_by', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('application_id', 'applicationId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('application_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('environment_id', 'environmentId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('environment_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('old_id', 'oldId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('old_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('type', 'type:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('scheduled_at', 'scheduledAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('scheduled_at', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('executed_at', 'executedAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('executed_at', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('description', 'description:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('description', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('observation', 'observation:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('observation', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('emergency_level', 'emergencyLevel:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('emergency_level', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tickets.index') !!}" class="btn btn-default">Cancel</a>
</footer>
<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('storage', 'storage:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('storage', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('filename', 'filename:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('filename', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('deleted_at', 'deletedAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deleted_at', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fileconfigcatalogs.index') !!}" class="btn btn-default">Cancel</a>
</footer>
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
    {!! Form::label('number', 'number:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('number', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('bucket', 'bucket:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('bucket', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('key', 'key:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('key', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('bundle_type', 'bundleType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('bundle_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('commit_id', 'commitId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('commit_id', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('jenkinsbuilds.index') !!}" class="btn btn-default">Cancel</a>
</footer>
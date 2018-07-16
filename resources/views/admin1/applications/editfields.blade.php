<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('name', 'name:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('aws_account_id', 'awsAccountId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('aws_account_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('repository', 'repository:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('repository', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_type', 'deploymentType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('url', 'url:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('url', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sonar_key', 'sonarKey:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sonar_key', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('json_rules', 'jsonRules:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('json_rules', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('applications.index') !!}" class="btn btn-default">Cancel</a>
</footer>
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
    {!! Form::label('access_key', 'accessKey:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('access_key', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('secret_key', 'secretKey:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('secret_key', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('region', 'region:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('region', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('awsaccounts.index') !!}" class="btn btn-default">Cancel</a>
</footer>
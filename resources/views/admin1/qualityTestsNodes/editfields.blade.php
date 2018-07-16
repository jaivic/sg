<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('ip', 'ip:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('ip', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('url', 'url:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('url', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('qualitytest_id', 'qualitytestId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('qualitytest_id', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('qualitytestsnodes.index') !!}" class="btn btn-default">Cancel</a>
</footer>
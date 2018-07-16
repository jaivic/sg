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
    {!! Form::label('name', 'name:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('name', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('slackchannels.index') !!}" class="btn btn-default">Cancel</a>
</footer>
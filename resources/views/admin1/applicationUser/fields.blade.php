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
    {!! Form::label('user_id', 'userId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('user_id', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('applicationuser.index') !!}" class="btn btn-default">Cancel</a>
</footer>
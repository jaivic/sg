<fieldset>
<section>
    {!! Form::label('user_id', 'userId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('user_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('role_id', 'roleId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('role_id', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('roleuser.index') !!}" class="btn btn-default">Cancel</a>
</footer>
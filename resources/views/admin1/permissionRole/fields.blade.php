<fieldset>
<section>
    {!! Form::label('permission_id', 'permissionId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('permission_id', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('permissionrole.index') !!}" class="btn btn-default">Cancel</a>
</footer>
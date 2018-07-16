<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('file_name', 'fileName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('file_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('file_type', 'fileType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('file_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('file_size', 'fileSize:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('file_size', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('file_path', 'filePath:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('file_path', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('backupreportepoliticas.index') !!}" class="btn btn-default">Cancel</a>
</footer>
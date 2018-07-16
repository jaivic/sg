<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('queue', 'queue:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('queue', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('payload', 'payload:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('payload', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('attempts', 'attempts:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('attempts', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('reserved_at', 'reservedAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('reserved_at', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('available_at', 'availableAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('available_at', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('created_at', 'createdAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('created_at', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</footer>
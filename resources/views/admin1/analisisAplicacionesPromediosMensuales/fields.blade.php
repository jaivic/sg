<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('month', 'month:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('month', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('year', 'year:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('year', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_index', 'sqaleIndex:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_index', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_debt_ratio', 'sqaleDebtRatio:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_debt_ratio', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('performance', 'performance:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('performance', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_load_time', 'pageLoadTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_load_time', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('analisisaplicacionespromediosmensuales.index') !!}" class="btn btn-default">Cancel</a>
</footer>
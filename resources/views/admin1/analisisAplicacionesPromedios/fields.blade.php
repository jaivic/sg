<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('total_aplicaciones', 'totalAplicaciones:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('total_aplicaciones', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_index', 'sqaleIndex:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_index', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_load_time', 'pageLoadTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_load_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_bytes', 'pageBytes:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_bytes', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('performance_qualification', 'performanceQualification:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('performance_qualification', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('pagespeed_score', 'pagespeedScore:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('pagespeed_score', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('yslow_score', 'yslowScore:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('yslow_score', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('fecha', 'fecha:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('fecha', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('analisisaplicacionespromedios.index') !!}" class="btn btn-default">Cancel</a>
</footer>
<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('aplicacion_id', 'aplicacionId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('aplicacion_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('aplicacion_nombre', 'aplicacionNombre:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('aplicacion_nombre', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('aplicacion_url', 'aplicacionUrl:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('aplicacion_url', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_bytes', 'pageBytes:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_bytes', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_bytes_text', 'pageBytesText:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_bytes_text', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_load_time', 'pageLoadTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_load_time', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('page_load_time_text', 'pageLoadTimeText:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('page_load_time_text', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('pagespeed_score', 'pagespeedScore:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('pagespeed_score', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('pagespeed_score_text', 'pagespeedScoreText:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('pagespeed_score_text', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('yslow_score', 'yslowScore:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('yslow_score', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('yslow_score_text', 'yslowScoreText:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('yslow_score_text', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_index', 'sqaleIndex:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_index', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_index_text', 'sqaleIndexText:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_index_text', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_index_trend', 'sqaleIndexTrend:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_index_trend', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_debt_ratio', 'sqaleDebtRatio:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_debt_ratio', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_debt_ratio_text', 'sqaleDebtRatioText:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_debt_ratio_text', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sqale_debt_ratio_trend', 'sqaleDebtRatioTrend:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sqale_debt_ratio_trend', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('aplicacion_sonar_key', 'aplicacionSonarKey:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('aplicacion_sonar_key', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('analisisaplicaciones.index') !!}" class="btn btn-default">Cancel</a>
</footer>
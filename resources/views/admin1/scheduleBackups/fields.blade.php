<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('instance_name', 'instanceName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('instance_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('instance_type', 'instanceType:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('instance_type', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('instance_id', 'instanceId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('instance_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('lunes', 'lunes:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('lunes', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('martes', 'martes:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('martes', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('miercoles', 'miercoles:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('miercoles', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('jueves', 'jueves:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('jueves', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('viernes', 'viernes:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('viernes', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('sabado', 'sabado:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('sabado', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('domingo', 'domingo:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('domingo', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('hora_programada', 'horaProgramada:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('hora_programada', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('description', 'description:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('description', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('mode', 'mode:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('mode', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('is_mirror', 'isMirror:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('is_mirror', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('is_linea_base', 'isLineaBase:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('is_linea_base', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('is_ansible', 'isAnsible:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('is_ansible', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('domain', 'domain:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('domain', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('mirror_instance', 'mirrorInstance:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('mirror_instance', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('mirror_instance_id', 'mirrorInstanceId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('mirror_instance_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('forward_time', 'forwardTime:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('forward_time', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('schedulebackups.index') !!}" class="btn btn-default">Cancel</a>
</footer>
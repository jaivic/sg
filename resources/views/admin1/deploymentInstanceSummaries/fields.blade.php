<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('deployment_information_id', 'deploymentInformationId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('deployment_information_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('instance_id', 'instanceId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('instance_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('deploymentinstancesummaries.index') !!}" class="btn btn-default">Cancel</a>
</footer>
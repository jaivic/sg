<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('file_config_catalog_id', 'fileConfigCatalogId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('file_config_catalog_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('ticket_id', 'ticketId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('ticket_id', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fileconfigcatalogticket.index') !!}" class="btn btn-default">Cancel</a>
</footer>
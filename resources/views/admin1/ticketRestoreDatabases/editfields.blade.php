<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('ticket_id', 'ticketId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('ticket_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('production_server_id', 'productionServerId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('production_server_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('production_database', 'productionDatabase:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('production_database', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('environment_id', 'environmentId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('environment_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('server_id', 'serverId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('server_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('database', 'database:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('database', null, ['class' => 'input-xs']) !!}
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
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('log', 'log:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('log', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ticketrestoredatabases.index') !!}" class="btn btn-default">Cancel</a>
</footer>
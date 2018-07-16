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
    {!! Form::label('database_id', 'databaseId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('database_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('server_id', 'serverId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('server_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('database_name', 'databaseName:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('database_name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('url', 'url:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('url', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('size', 'size:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('size', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('status', 'status:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('status', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('executed_at', 'executedAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('executed_at', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('ticketbackupdatabases.index') !!}" class="btn btn-default">Cancel</a>
</footer>
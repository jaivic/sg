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
    {!! Form::label('user_id', 'userId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('user_id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('approved', 'approved:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('approved', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('approved_at', 'approvedAt:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('approved_at', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('condition', 'condition:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('condition', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('group', 'group:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('group', null, ['class' => 'input-xs']) !!}
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
    <a href="{!! route('workflows.index') !!}" class="btn btn-default">Cancel</a>
</footer>
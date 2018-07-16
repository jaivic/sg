<fieldset>
<section>
    {!! Form::label('id', 'id:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('id', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('name', 'name:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('name', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('email', 'email:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('email', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('password', 'password:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('password', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('github_account', 'githubAccount:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('github_account', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('timezone', 'timezone:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('timezone', null, ['class' => 'input-xs']) !!}
    </label>
</section><section>
    {!! Form::label('remember_token', 'rememberToken:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('remember_token', null, ['class' => 'input-xs']) !!}
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
    {!! Form::label('slack_user_id', 'slackUserId:',['class' => 'label']) !!}
    <label class="input">
         {!! Form::text('slack_user_id', null, ['class' => 'input-xs']) !!}
    </label>
</section>
</fieldset>
<footer> 
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</footer>
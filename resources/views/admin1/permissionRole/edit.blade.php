@extends('layouts.app')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    <div class="well no-padding">
      
            <header>
               
            </header>
              @if(!empty($errors))
                @if($errors->any())
                    <ul class="alert alert-danger" style="list-style-type: none">
                        @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                @endif
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

              {!! Form::model($permissionRole, ['route' => ['permissionrole.update', $permissionRole->permission_id], 'method' => 'post','class' => 'smart-form  client-form']) !!}
                @include('admin1.permissionRole.editfields')
            {!! Form::close() !!}
      
    </div>
</div>  
@endsection

@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proceso de actualización de contraseña</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Has iniciado sesión.

                    <div class="" role="alert">
                        <a class="bt" href="/home">ir a pantalla principal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

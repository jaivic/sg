@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        aqui va la lista de tablas de la base de dato
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tabla</th>
                            <th scope="col">Enable</th>
                            <th scope="col">Api</th>
                            <th scope="col">Request</th>
                            <th scope="col">Controller</th>
                            <th scope="col">test</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                                <td>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                                <td>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                                <td>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                                <td>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                            </tr>
                          
                        </tbody>
                        </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script type="text/javascript">
const app = new Vue({
    el: '#app' , data: {
        application: '',
        scheduled_at: '',
    
    },

    methods: {
      
        loadApplication() {
        
        },

      

    },

    mounted() {
      console.log(JSON.parse('{{$tables}}'));
    }
});

</script>
@endsection
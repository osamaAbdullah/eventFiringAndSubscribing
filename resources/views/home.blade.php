@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!

                    <div class="btn btn-primary" @click="get_data">Get</div>
                    <div>@{{gitData}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        const app = new Vue({
            el:'#app',
            data:{
                gitData:'nothing yet'
            },
            methods:{
                get_data(){
                    axios.get('{{route('getData')}}')
                        .then(response => {
                            console.log(response.data.hi);
                        })
                        .catch( error => {
                            console.log(error);
                        });
                }
            }
        })
    </script>
@endsection
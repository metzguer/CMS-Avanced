@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">
                    Panel de administracion: {{$title}}
                </div>
                
                <div class="card-body">
                    
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                         {{$error}}<br/>
                        @endforeach
                    </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            estas logueaado
                        </div>
                    @endif


                    <ul class="list-group list-group-flush">
                        @foreach($users as $user)
                        <li class="list-group-item ">{{$user->name}}<br/>
                        <span class="float-right font-italic text-muted">Ultima sesión: {{$date}} </span>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

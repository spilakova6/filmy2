@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('Users')}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($users as $user )
                        {{$user->name}} <br>
                                {{$user->email }} <br>
                                {{$user->password }} <br>
                            @endforeach
                        <a href="{{route('user.create')}}" class="btn btn-success" role="button">Add new user</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

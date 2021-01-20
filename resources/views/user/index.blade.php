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
                        @if(Auth::user()->email== 'admin@admin.sk')
                            <table class="table table-hover table-responsive-md" id="TabUsers">
                                <thead>
                                <tr>
                                    <th scope="col">Meno</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                @foreach($users as $user )
                                    <tbody>
                                    <tr>
                                        <td>{{$user->name}} </td>
                                        <td>{{$user->email }}</td>
                                        <td>
                                            <form action="{{route('user.destroy', $user)}}"
                                                  method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE"/>
                                                @auth
                                                    <button type="submit" class="btn btn-outline-danger ">Zmazat</button>
                                                    {{--                                                    onclick="return confirm('Naozaj zmazat?');"--}}
                                                @endauth
                                            </form>

                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            {{--                        <a href="{{route('user.create')}}" class="btn btn-success" role="button">Add new user</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-header">Add User</div>
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="table table-hover">
                <form id="create-form" method="post" action="{{route('user.create')}}">

                    @csrf
                    {{--        @method($method)--}}
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" id="name" required name="name" placeholder="Full name"
                               value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required
                               placeholder="Enter email" value="{{ $user->email }}">
                        @error('email')
                        <div class="text">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" required id="password" name="password"
                               placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password">Password again</label>
                        <input type="password" class="form-control" required id="password-confirm" name="password_confirmation"
                               placeholder="Password">
                    </div>

                    <script>
                        $(function () {
                            var form = $('#create-form');
                            form.on('submit', function (event) {
                                event.preventDefault();
                                var req = $.ajax({
                                    url: form.attr('action'),
                                    type: 'POST',
                                    data: form.serialize(),
                                    dataType: 'json',
                                    success: function (data, status, xhr) {
                                        $('#TabUsers tr:last').after('<tr><td>' + data.name + '</td><td>' + data.email + '</td><td></td></tr>');
                                        console.log(data);
                                    },
                                });
                            });
                        });
                    </script>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            @else
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card-header">{{__('Musíš byť prihlásený ako admin')}}</div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection



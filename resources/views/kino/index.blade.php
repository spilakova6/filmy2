@extends('layouts.app')

@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="check.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
</head>


{{--    <a href="{{route('kinos.index')}}">home</a> <br>--}}
<body>
<div class="container">
    <div class="row">
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                <form action="{{route('kinos.add')}}" method="POST">
                @csrf

                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <label>Nazov filmu</label>
                        <input class="form-control" type="text" name="nazov" value="{{old('nazov')}}"/>
                    </div>
                    <div class="form-group">
                        <label>Popis</label>
                        <input class="form-control" type="text" name="popis" value="{{old('popis')}}"/>
                    </div>
                    <div class="form-group">
                        <label>URL obrazka</label>
                        <input class="form-control" type="text" name="plagat" value="{{old('plagat')}}"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Pridat</button>

                </div>
            </form>

        </div>
    </div>
</div>


<div class="container pb-4">

    <div class="row">
        <div class="col-md-12">

            <div class="row">


                @foreach($kinos as $kino)
                    <div class="col-md-4 d-flex align-items-stretch ">
                        <div class="card">
                            <div class="card-body ">
                                <a class="btn btn-outline-primary" href="{{route('kinos.show', $kino)}}"
                                   role="button">edituj</a>
                                <br>

                                <form action=""></form>


                                <form action="{{route('kinos.delete', $kino)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE"/>

                                    <button type="submit" class="btn btn-outline-danger "
                                            onclick="return confirm('Naozaj zmazat?');">Zmazat
                                    </button>

                                </form>


                                <h5 class="card-title">{!!nl2br($kino->nazov)!!}</h5>
                                <p class="card-text">{!!nl2br($kino->popis)!!}</p>
                                <img class="card-img-top" src="{{$kino->plagat}} "/>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <hr>
</div>

</body>
</html>


@endsection











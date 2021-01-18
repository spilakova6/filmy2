@extends('layouts.app')

@section('content')


    <link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">
    <script src="{{asset('datepicker/datepicker.js')}}"></script>

    @auth
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

                            <div class="form-group">
                                <label>Cas</label>
                                <input class="form-control" type="text" name="cas" value="{{old('cas')}}"/>
                            </div>

                            <div class="form-group">
                                <label>Datum</label>
                            <input data-toggle="datepicker" class="form-control" type="text" name="datum" value="{{old('datum')}}"/>
                            </div>
                            <script>
                                $(function () {
                                    'use strict',

                                    $('[data-toggle="datepicker"]').datepicker({

                                        format: 'yyyy-mm-dd',
                                        startDate:  $().datepicker ('getDate', true),

                                    });

                                });
                            </script>


                            <button type="submit" class="btn btn-primary">Pridat</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endauth




@endsection

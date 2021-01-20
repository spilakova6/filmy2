@extends('layouts.app')

@section('content')


    <link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">
    <script src="{{asset('datepicker/datepicker.js')}}"></script>
<link rel="stylesheet" href="{{asset('datetimepicker/jquery.datetimepicker.css')}}"/>
<script src="{{asset('datetimepicker/jquery.datetimepicker.full.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">;

{{--    <style>--}}
{{--        body {--}}
{{--            background-repeat: no-repeat;--}}
{{--            background-image: url("https://yourdubaiguide.com/wp-content/uploads/2019/03/Novo-Cinemas-IMG-Worlds-of-Adventure-dubai.jpg");--}}
{{--            background-attachment: fixed;--}}
{{--            background-size: cover;--}}
{{--        }--}}


{{--    </style>--}}

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
                                <input class="form-control" type="text" name="nazov" required  value="{{old('nazov')}}"/>
                            </div>
                            <div class="form-group">
                                <label>Popis</label>
                                <input class="form-control" type="text" name="popis" required value="{{old('popis')}}"/>
                            </div>
                            <div class="form-group">
                                <label>URL obrazka</label>
                                <input class="form-control" type="text" name="plagat" required value="{{old('plagat')}}"/>
                            </div>
                            <div class="form-group">
                                <label>Cas</label>
                                <input class="form-control" id="timepicker" type="text" autocomplete="off"  required name="cas" value="{{old('cas')}}"/>
                            </div>
                            <script>
                                $('#timepicker').datetimepicker({
                                    timepicker: true,
                                    datepicker: false,
                                    format: 'H:i',
                                    hours12: false,
                                    step: 5
                                });
                            </script>
                            <div class="form-group">
                                <label>Datum</label>
                            <input data-toggle="datepicker"  class="form-control" type="text" autocomplete="off" required name="datum" value="{{old('datum')}}"/>
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

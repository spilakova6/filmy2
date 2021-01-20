@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">
    <script src="{{asset('datepicker/datepicker.js')}}"></script>
    <link rel="stylesheet" href="{{asset('datetimepicker/jquery.datetimepicker.css')}}"/>
    <script src="{{asset('datetimepicker/jquery.datetimepicker.full.js')}}"></script>

    <div class="container pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-stretch ">
                        <div class="card">
                            <div class="card-body  ">
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
                                    <h5 class="card-title">{!!nl2br($kino->nazov)!!}</h5>
                                    <p class="card-text">{!!nl2br($kino->popis)!!}</p>
                                    <img class="card-img-top" src="{{$kino->plagat}} " alt="plagat"/>
                                    <a href="#"
                                       class="btn btn-primary align-text-top">{{$kino->datum}}   {{$kino->cas}}</a>
                                    {{--                            @if (!empty($kino->plagat))--}}
                                    {{--                                <img src="{{$kino->plagat}}" alt="">--}}
                                    {{--                            @else--}}
                                    {{--                                nema plagat--}}
                                    {{--                            @endif--}}
                                </div>
                                <hr>

                                <form action="{{route('kinos.edit', $kino)}}" method="POST">
                                    @csrf
                                    <div class="shadow p-3 mb-12 bg-white rounded">
                                        <input type="hidden" name="_method" value="PUT"/>
                                        <div class="form-group">
                                            <label>Nazov filmu</label>
                                            <input class="form-control" type="text" required name="nazov"
                                                   value="{{$kino->nazov}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Popis</label>
                                            <textarea class="form-control" required name="popis"
                                                      rows="5">{{$kino->popis}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>URL obrazka</label>
                                            <textarea class="form-control" name="plagat" required rows="5">img src="{{$kino->plagat}}"</textarea>

                                        </div>
                                        <div class="form-group">
                                            <label>Cas</label>
                                            <input class="form-control" id="timepicker" autocomplete="off" required
                                                   type="text" name="cas"
                                                   value="{{$kino->cas}}"/>
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
                                            <input data-toggle="datepicker" autocomplete="off" required
                                                   class="form-control" type="text"
                                                   name="datum" value="{{$kino->datum}}"/>
                                        </div>
                                        <script>
                                            $(function () {
                                                'use strict',
                                                    $('[data-toggle="datepicker"]').datepicker({
                                                        format: 'yyyy-mm-dd',
                                                        startDate: $().datepicker('getDate', true),
                                                    });
                                            });
                                        </script>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                @endsection
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--                                <form  id="save-form" action="{{route('kinos.edit', $kino)}}" method="POST">--}}
    {{--                                    @csrf--}}
    {{--                                    <input type="hidden" name="_method" value="PUT"/>--}}
    {{--                                    <input   type="text" name="nazov" value="{{$kino->nazov}}"/>--}}
    {{--                                    <textarea name="popis" id="" rows="5">{{$kino->popis}}</textarea>--}}
    {{--                                    <textarea name="plagat" id="" rows="5">img src="{{$kino->plagat}}"</textarea>--}}
    {{--                                                                    <script>--}}
    {{--                                                                        $(function () {--}}
    {{--                                                                            var form = $('#save-form');--}}
    {{--                                                                            form.on('submit', function (event) {--}}
    {{--                                                                                event.preventDefault();--}}
    {{--                                                                                var req = $.ajax({--}}
    {{--                                                                                    url: form.attr('action'),--}}
    {{--                                                                                    type: 'POST',--}}
    {{--                                                                                    data: form.serialize(),--}}
    {{--                                                                                    dataType: 'json',--}}
    {{--                                                                                    success: function(data, status, xhr) {--}}
    {{--                                                                               $('#tab').after('<h5>'+ data.name +'</h5>');--}}
    {{--                                                                                    },--}}
    {{--                                                                                });--}}
    {{--                                                                            });--}}
    {{--                                                                        });--}}
    {{--                                                                    </script>--}}
    {{--                                    <button type="submit">Save</button>--}}
    {{--                                </form>--}}
    {{--                                @endsection--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}




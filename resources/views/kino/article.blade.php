@extends('layouts.app')

@section('content')

<style>
    .box-shadow {
        padding: 10px;
        border: 1px solid #999;
        box-shadow: 0px 0px 5px #888;
        border-radius: 5px;
    }

</style>

<div class="table-responsive">

    <div class="container">
        <p></p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Názov filmu</th>
                <th>Hodnotenie</th>
                <th>Počet hodnotení</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->kino->nazov}}</td>
                <td>{{$article->hodnotenie}} %</td>
                <td>{{$article->pocet_hodnoteni}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class="container py-2">
    @foreach($articles as $article)
    <div class="box-shadow d-block">
        <div class="row">
            <div class="col-md-12">
                <h3 class="table-responsive-md">{{$article->kino->nazov}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="{{$article->kino->plagat}}" alt="" class="img-fluid">
            </div>
{{--            <div class="col-md-3">--}}

{{--                <img src="{{$article->obrazok}}" alt="" class="img-fluid">--}}
{{--            </div>--}}
            <div class="col-md-9 text-justify">
            <span class="text"><p>{!!nl2br($article->popis)!!}</p></span>
            </div>
        </div>
    </div>
    @endforeach
</div>


<div class="media border p-3">
    @foreach($articles as $article)
        {{--vyhadzovalo mi chybu Trying to get property 'nazov' of non-object, teno if tomu pomohol--}}
        @if(!empty($articles))
            @foreach($articles as $article)

                <td>{{$article->user->id ?? '' }}</td>
            @endforeach
        @endif
    <img src="{{$article->user->foto}}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
        <h4>{{$article->user->name}}<small><i> {{$article->datum}} </i></small></h4>

    </div>
    @endforeach
</div>

@endsection

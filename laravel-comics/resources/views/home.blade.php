
@extends('../layouts/master')

@php

    $comics = (config("comics"));

@endphp

@section('fumetti')
    <div class="container py-5">
        <div class="d-flex flex-wrap row row-cols-5 gap-5 justify-content-between">
            @foreach ($comics as $comic)

             <x-card>
                    <x-slot:immagine>{{$comic['thumb']}}</x-slot:immagine>
                    <x-slot:titolo>{{$comic['title']}}</x-slot:titolo>
                    {{$comic['price']}}
            </x-card>

            @endforeach
        </div>
    </div>

@endsection


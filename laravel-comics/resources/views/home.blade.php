
@extends('../layouts/master')

@php

    $comics = (config("comics"));

@endphp

@section('fumetti')
<button class="btn btn-primary mb-4 px-5 rounded-0 position-relative translate-middle fw-bold fs-5 btn-series">CURRENT SERIES</button>
<div class="container py-5 ">
        <div class="d-flex flex-wrap justify-content-between gap-5 px-5">
            @foreach ($comics as $comic)

             <x-card>
                    <x-slot:immagine>{{$comic['thumb']}}</x-slot:immagine>
                    <x-slot:series>{{$comic['series']}}</x-slot:series>
            </x-card>

            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary mb-4 px-5 rounded-0">LOAD MORE</button>
    </div>

@endsection


<div class="card m-0 p-0">

    <img
        src="{{$immagine}}"
        class="img-fluid rounded-top p-0 m-0"
        alt="immagine"
        style="height: 300px; object-fit: cover"
    />
    <h3 class="m-3">{{$titolo}}</h3>
    {{-- variabile per inserire contenuto passato dalla pagina --}}
    <h3 class="m-3">{{$slot}}</h3>
</div>

@props(['title', 'price', 'series', 'saledate', 'thumb'])

<div class="card h-100">
    <img src="{{ $thumb ?? Vite::asset('resources/img/jumbotron.jpg') }}" 
         class="card-img-top" alt="Card image">
    <div class="card-body">
        <h5 class="card-title">{{ $title ?? 'Titolo' }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $price ?? '' }}</li>
        <li class="list-group-item">{{ $series ?? '' }}</li>
        <li class="list-group-item">{{ $saledate ?? '' }}</li>
    </ul>
</div>
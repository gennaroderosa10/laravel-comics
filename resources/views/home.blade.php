@extends("layouts.master")

@section("titolo")
Home
@endsection

@php
    $comics = config("comics")
@endphp


@section("hero")
<div class="container-fluid p-0" style="height: 50vh;">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" 
         class="w-100 h-100 object-fit-cover" 
         alt="Hero">
</div>
@endsection

@section("contenuto")
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($comics as $comic)
            <div class="col">
                <x-card 
                    :title="$comic['title'] ?? ''"
                    :price="$comic['price'] ?? ''"
                    :series="$comic['series'] ?? ''"
                    :saledate="$comic['sale_date'] ?? ''"
                    :thumb="$comic['thumb'] ?? ''">
                </x-card>
            </div>
        @endforeach
    </div>
</div>
@endsection



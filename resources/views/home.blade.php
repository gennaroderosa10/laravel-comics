@extends("layouts.master")

@section("titolo")
Home
@endsection

@section("hero")
<div class="container-fluid p-0" style="height: 50vh;">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" 
         class="w-100 h-100 object-fit-cover" 
         alt="Hero">
</div>
@endsection

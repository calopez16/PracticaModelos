
@extends('layouts.app')

@section('content')
<h1>Categorys</h1>


    <!-- {{$categorys=App\Category::all()}} -->

    @foreach (($categorys=App\Category::all()) as $category)
        <p>This is user {{ $category->id }}</p>
    @endforeach

    
@endsection
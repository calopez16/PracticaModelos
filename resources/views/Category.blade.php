
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                 <!-- {{$categorys=App\Category::all()}} -->

                    @foreach (($categorys=App\Category::all()) as $category)
                        <p>This is user {{ $category->id }}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
<h1>Categorys</h1>



    
@endsection
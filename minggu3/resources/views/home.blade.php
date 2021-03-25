@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the Home Page</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Hobi</p>
        <ul>
            @foreach ($hobi as $h)
                <li>{{ $h }}</li>
            @endforeach
        </ul>
    </div>
@endsection
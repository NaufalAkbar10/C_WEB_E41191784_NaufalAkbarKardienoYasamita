@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is home page</p>
        </div>
        <p> Nama : {{ $nama }}</p>
        <p> Mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
    </div>
@endsection
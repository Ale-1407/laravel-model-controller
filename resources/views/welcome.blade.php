@extends('layouts.app')

@section('title-page', 'Movies')

@section('main-content')
    <h1>Film</h1>
    <div class="cont-card">
        @foreach ($movies as $elem)
          <div class="cards">
            <h3>{{ $elem->title }}</h3>
            <p>{{ $elem->original_title }}</p>
            <p>{{ $elem->nationality }}</p>
            <p>{{ $elem->date }}</p>
            <p>{{ $elem->vote }}</p>
          </div>
        @endforeach
    </div>
@endsection

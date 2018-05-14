@extends('layouts.maket')

@section('content')

    @if($article)

        <div>
              <h2>{{ $article->title }}</h2>
              <p>{!! $article->text !!} </p>
        </div>

    @endif

@endsection

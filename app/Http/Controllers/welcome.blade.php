@extends('layouts.maket')

@section('content')

      <div  id="head" class="main">
        <h1 id="wel">
          {{ $message }}
        </h1>
        <p id="ps">
          {{ $PS }}
        </p>
      </div>
      <div class="row">


        @foreach($articles as $article)
        <div class="col">
          <div class="secline"></div>
              <h2>{{ $article->title }}</h2>
              <p>{!! $article->descr !!} </p>
              <p><a class="button" href="{{ route('articleShow',['id'=>$article->id]) }}" role="button">View All</a></p>
              <form action="{{ route('articleDelete',['article' => $article->id]) }}" method="post">
              <!--<input type='hidden' name='_method' value="DELETE"/>-->
                  {{ method_field('DELETE') }}

                  {{ csrf_field() }}
                <button type="submit" class="button">Delete</button>
              </form>
        </div>
        @endforeach


      </div>

@endsection

@extends('layouts.maket')

@section('content')

<form method="post" action="{{route('articleStore')}}">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" name="title"/>
  </div>
  <div class="form-group">
    <label for="exemple">Exemple</label>
    <textarea class="form-control" name="descr"></textarea>
  </div>
  <div class="form-group">
    <label for="exemple">Full Text</label>
    <textarea class="form-control" name="text"></textarea>
  </div>
  <button type="submit" class="button">Submit</button>
  {{ csrf_field() }}
</form>

@endsection

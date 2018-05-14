<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
      <header>
        <a class="mainButton" href="{{route ('index')}}">HOME</a>
        <a class="mainButton" href="{{route ('articleAdd')}}">ADD</a>
      </header>

      @if(count($errors) > 0)

        <div>

          <ul>

            @foreach($errors->all() as $error)
              <li>
                {{ $error }}
              </li>
            @endforeach

          </ul>

        </div>

      @endif

      @yield('content')

    </body>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</html>

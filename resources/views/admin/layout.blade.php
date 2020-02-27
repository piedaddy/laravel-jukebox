<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') Jukebox Admin</title>

  <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
  {{-- generates helper function that finds anything in public --}}
</head>
<body>
  
  <nav>
    <a href="{{action('AuthorController@create')}}">New author</a>

  </nav>

  <h1>@yield('headline')</h1>
  @yield('content') 
  {{--  will display these things if it has been declared earlier as a section  --}}

  @yield('form')

</body>
</html>
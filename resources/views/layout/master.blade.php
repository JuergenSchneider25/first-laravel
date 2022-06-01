<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>@yield('title')</title>
</head>

<body>
    <h1><a href="/messages">@yield('title')</a></h1>

      @yield('content')

      <div><b>Dummy Footer: {{date('d.m.Y')}}</b></div>
</body>

</html>
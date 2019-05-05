<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', "MFP!")</title>
  <style>
    .isComplete {
      text-decoration: line-through;
    }
  </style>
</head>

<body>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">about</a></li>
    <li><a href="/contact">contact</a></li>
    <li><a href="/projects">projects</a></li>
  </ul>

  @yield('content')

</body>

</html>
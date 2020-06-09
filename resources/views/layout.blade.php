<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Aprogrammer')</title>
  </head>
  <body>
    <ul>
      <a href="php"><li>PHP Page</li></a>
      <a href="js"><li>Js Page</li></a>
    </ul>
 @yield("content")

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','StockY App')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">StockY App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">Help</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">Login</a></li>
        </ul>
      </div>
    </nav>

    @yield('content')
  </body>
</html>

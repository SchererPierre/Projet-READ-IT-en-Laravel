<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Readit @yield('title')</title>

    @include('template.partials._head')

  </head>
  <body>

    @include('template.partials._nav')

    @include('template.partials._hero')

    @include('template.partials._main')

    @include('template.partials._aside')

    @include('template.partials._footer')  
    
    @include('template.partials._loader')

    @include('template.partials._scripts') 

  </body>
</html>

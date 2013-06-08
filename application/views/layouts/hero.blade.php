<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $desc }}">
    <meta name="author" content="{{ $author }}">

    <!-- Le styles -->
    @yield('style-before')
    {{ Asset::container('bootstrapper')->styles(); }}
    @yield('style-between')
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    {{ Asset::container('bootstrapper-responsive')->styles(); }}
    @yield('style-after')

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    @section('nav')
      {{ render('layouts.nav'); }}
    @yield_section

    <div class="container">

      @yield('content')

      <hr>

      <footer>
        <p>{{ Config::get('app.name'); }} &copy; {{ Config::get('app.company'); }} 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ Asset::container('bootstrapper')->scripts(); }}

  </body>
</html>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ***** All CSSS Link Start ***** -->
    @include('FrontSite.Layout.include.css')

    <title>Sixteen Clothing HTML Template</title>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    @include('FrontSite.Layout.include.header')

    <!-- Page Content -->

    @yield('content')


    {{-- Footer include --}}
    @include('FrontSite.Layout.include.footer')


    <!-- Bootstrap core JavaScript -->
    @include('FrontSite.Layout.include.js')

  </body>

</html>

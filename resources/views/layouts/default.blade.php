<!doctype html>
<html>
    <head>
         @include('includes.head')
    </head>
    <body>
        <div class="container">
            <header class="row">
                @include('includes.header')
            </header>
        </div>

            <div id="main">
                 @yield('content')
            </div>

        <div class="container">
            <footer class="text-center">
                 @include('includes.footer')
            </footer>
        </div>

        <script src="Flickity/flickity.pkgd.min.js"></script>
        <script>
            var elem = document.querySelector('.main-carousel');
            var flkty = new Flickity( elem, {
                // options
                cellAlign: 'right',
                pageDots: false,
                prevNextButtons: false,
            });

            document.querySelector('.arrow-left').addEventListener( 'click', function() {
                flkty.flickity('previous');
            });
        </script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
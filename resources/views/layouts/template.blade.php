<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('includes.nav')
        </nav>

            @yield('contenu')

        <div class="container">
            <footer>
                @include('includes.footer')
            </footer>
        </div>

        <script src="js/app.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 4000
            })
        </script>
    </body>
</html>

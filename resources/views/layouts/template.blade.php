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

    
    <script src="../resources/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../resources/assets/js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 4000
            })
        </script>
    </body>
</html>

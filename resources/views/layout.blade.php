<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>taller de laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="navbar navbar-default navbar-fixed-top">
            @if( Auth::check() )
                Bienvenido, {{ Auth::user()->name }} | <a href="/auth/logout">Salir</a>
            @endif
        </header>
        
        <div class="container">
            <section class="col-md-6 col-md-offset-3">
                @yield('content')
            </section>

            <aside class="col-md-5">
                @yield('aside')
            </aside>
        </div>


        <script type="text/javascript">
            @yield('scripts')
        </script>
    </body>
</html>

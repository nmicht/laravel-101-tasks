<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>taller de laravel</title>

    </head>
    <body>
        @yield('content')

            <aside class="col-md-5">
                @yield('aside')
            </aside>

        <script type="text/javascript">
            @yield('scripts')
        </script>
    </body>
</html>

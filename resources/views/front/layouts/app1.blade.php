<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="">
        <link rel='stylesheet' id='aska-v2-css-css'
            href='{{asset('css/app.css')}}' type='text/css'
            media='screen, print' />
    </head>

<body class="home page page-id-130 page-template page-template-front-page page-template-front-page-php">
    <div class="container">
        <span data-load-indicator></span>
    </div>
    <header class="over-dark">
        @include('front.layouts.navigation')
    </header>
    <main>
        {{ $slot }}
    </main>
    @include('front.layouts.footer')
    <script type='text/javascript' src='https://askanyc.com/wp-content/themes/aska-v2/assets/js/site.js?ver=1666145135'>
    </script>
</body>

</html>

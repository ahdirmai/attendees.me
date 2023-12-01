<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title> @yield('title')</title>

    <link href="{{ asset('css/app.css') }} " rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @include('layouts.admin.includes.sidebar')

        <div class="main">
            @include('layouts.admin.includes.header')

            <main class="content">
                @yield('content')
            </main>

            @include('layouts.admin.includes.footer')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }} "></script>


</body>

</html>
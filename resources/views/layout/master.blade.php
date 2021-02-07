<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        @yield('title')
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/blog/">

    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
</head>

<body>

@include('layout.nav')

<main role="main" class="container">

    <div class="row">

        @yield('content')

        @include('layout.sidebar')

    </div>

</main>

@include('layout.footer')

</body>
</html>

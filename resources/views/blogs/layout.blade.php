<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 CRUD </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{ route('blogs.index') }}" class="navbar-brand d-flex align-items-center">
                <strong>Laravel CRUD</strong>
            </a>
        </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1>Laravel 6 Blog</h1>
            <p class="lead text-muted">By: Mohamed Keita.</p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            @yield('content')
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p>Laravel 6 CRUD &copy;</p>
    </div>
</footer>
</body>
</html>

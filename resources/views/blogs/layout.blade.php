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


<main role="main" class="container">
    <div class="starter-template">
        <h1>Laravel 6 Blog</h1>
        <p class="lead">By: Mohamed Keita</p>

    @yield('content')
    </div>
</main>


<footer class="text-muted">
    <div class="container">
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    </div>
</footer>
</body>
</html>

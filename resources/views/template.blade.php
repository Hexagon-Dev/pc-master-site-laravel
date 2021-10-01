<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="navbar-brand text-white text-decoration-none"><h3><ins>PCMaster</ins></h3></a>

                    <ul class="nav navbar-dark col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item"><a href="/" class="nav-link px-2 link-light">Главная</a></li>
                        <li class="nav-item"><a href="/price" class="nav-link px-2 link-light">Цены</a></li>
                        <li class="nav-item"><a href="/question" class="nav-link px-2 link-light">Вопросы</a></li>
                        <li class="nav-item"><a href="/feedback" class="nav-link px-2 link-light">Отзывы</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link px-2 link-light">Контакты</a></li>
                    </ul>

                    <div class="text-end">
                        <span class="text-muted"><i class="fas fa-phone"></i>&nbsp;+38(066)695-37-45</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('main_content')
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><span class="text-muted p-2">Hexagon <i class="far fa-copyright"></i> 2021</span></li>
                <li><span class="text-muted p-2">|</span></li>
                <li><span class="text-muted p-2"><i class="fas fa-envelope"></i> hexagon14@mail.ru</span></li>
            </ul>
        </div>
    </footer>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>

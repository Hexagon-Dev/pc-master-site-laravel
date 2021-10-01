@extends('template')

@section('title')Контакты@endsection

@section('main_content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 my-5 text-center">
            <div class="col text-start">
                <div class="card my-4 rounded-3 shadow-sm w-50 m-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('/img/user.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Name Surname</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                                <p class="card-text text-secondary">Контакты:<br>
                                    <i class="fas fa-envelope"></i> <a href="mailto:hexagon14@mail.ru" class="card-link">hexagon14@mail.ru</a><br>
                                    <i class="fas fa-paper-plane"></i> <a href="tel:+380666953745" class="card-link">+38(066)69-37-45</a><br>
                                    <i class="fab fa-github"></i> <a href="https://github.com/hexagon14">https://github.com/hexagon14</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

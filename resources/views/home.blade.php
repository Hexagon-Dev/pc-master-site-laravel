@extends('template')

@section('title')Главная@endsection

@section('main_content')
    <div class="container">
        <div class="text-white bg-dark d-inline-flex justify-content-between">
            <div class="col-md-6 px-0 me-0 m-5 d-inline-block">
                <h1 class="display-4">Сервис по сборке и ремонту ПК</h1>
                <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi delectus iure minus soluta. Ad deserunt magnam numquam quasi quo!</p>
                <p class="lead mb-0"><a href="/feedback" class="btn btn-light fw-bold">Отзывы</a></p>
            </div>
            <img src="{{asset('img/1.png')}}" alt="Computer" />
        </div>
    </div>

    <div class="container px-4 py-4" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Почему стоит выбрать наш сервис?</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fas fa-tachometer-alt icon"></i>
                </div>
                <div>
                    <h2>Быстро</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi delectus iure minus soluta. Ad deserunt magnam numquam quasi quo!</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="far fa-gem icon"></i>
                </div>
                <div>
                    <h2>Качественно</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi delectus iure minus soluta. Ad deserunt magnam numquam quasi quo!</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fas fa-money-bill icon"></i>
                </div>
                <div>
                    <h2>Недорого</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi delectus iure minus soluta. Ad deserunt magnam numquam quasi quo!</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
@endsection

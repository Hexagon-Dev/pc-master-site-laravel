@extends('template')

@section('title')Цены@endsection

@section('main_content')
    <div class="container">
        <div class="pricing-header p-3 mx-auto text-center">
            <h1 class="display-4 fw-normal">Цены</h1>
            <p class="fs-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, odit.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Цена 1</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">5<small class="text-muted fw-light">$</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Lorem ipsum dolor</li>
                            <li>sit amet, consectetur</li>
                            <li>adipisicing elit.</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Заказать</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Цена 2</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">10<small class="text-muted fw-light">$</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Lorem ipsum dolor</li>
                            <li>sit amet, consectetur</li>
                            <li>adipisicing elit.</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Заказать</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Цена 3</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">15<small class="text-muted fw-light">$</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Lorem ipsum dolor</li>
                            <li>sit amet, consectetur</li>
                            <li>adipisicing elit.</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Заказать</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Услуга</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lorem ipsum dolor.</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lorem ipsum dolor.</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lorem ipsum dolor.</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Lorem ipsum dolor.</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Lorem ipsum dolor.</td>
                        <td><span class="badge bg-secondary">Бесплатно</span></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Lorem ipsum dolor.</td>
                        <td><span class="badge bg-secondary">Бесплатно</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <div class="card" style="width: 19rem;height: 18rem;position: absolute;">
                    <div class="card-body pt-5">
                        <h5 class="card-title">Lorem ipsum dolor.</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum.</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, esse?</p>
                        <a href="mailto:hexagon14@mail.ru" class="card-link">Написать письмо</a>
                        <a href="tel:+380666953745" class="card-link">Позвонить</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

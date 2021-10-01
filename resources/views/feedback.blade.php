@extends('template')

@section('title')Отзывы@endsection

@section('main_content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="my-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="feedback/check">
                    @csrf
                    <span class="fs-4 mb-2 d-block">Оставить отзыв:</span>
                    <input type="text" class="form-control w-25 d-inline-block" name="name" placeholder="Имя">
                    <select class="form-select w-25 d-inline-block" name="mark" aria-label="Floating label select example">
                        <option selected>Выберите оценку</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <div class="form-floating my-2">
                        <textarea class="form-control" placeholder="Ваш отзыв" name="feedback" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Ваш отзыв</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>


        <ul class="list-group py-4">
            @foreach($feedbacks as $el)
            <li class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $el->name }}</h5>
                    <small class="text-muted">{{ $el->created_at }}</small>
                </div>
                <p class="mb-1">{{ $el->feedback }}</p>
                <p class="card-text"><small class="text-muted">Оценка: {{ $el->mark }}</small></p>
            </li>
            @endforeach
        </ul>
    </div>
@endsection

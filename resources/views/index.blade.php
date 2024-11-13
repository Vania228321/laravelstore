@extends('layout.site')

@section('content')
    <h1>LaravelStore</h1>
    <p>
        Добро пожаловать в LaravelStore — ваш идеальный уголок онлайн-шопинга,
        где технологии встречают стиль! Этот интернет-магазин, построенный на мощной платформе Laravel,
        предлагает вам уникальный опыт покупок, объединяя удобство, элегантный дизайн и интуитивно
        понятный интерфейс.
    </p>

    @if($new->count())
        <h2>Новинки</h2>
        <div class="row">
        @foreach($new as $item)
            @include('catalog.part.product', ['product' => $item])
        @endforeach
        </div>
    @endif

    @if($hit->count())
        <h2>Лидеры продаж</h2>
        <div class="row">
            @foreach($hit as $item)
                @include('catalog.part.product', ['product' => $item])
            @endforeach
        </div>
    @endif

    @if($sale->count())
        <h2>Распродажа</h2>
        <div class="row">
            @foreach($sale as $item)
                @include('catalog.part.product', ['product' => $item])

            @endforeach
        </div>
    @endif
@endsection

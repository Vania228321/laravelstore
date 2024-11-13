@extends('layout.site', ['title' => 'Каталог товаров'])

@section('content')
    <h1>Каталог товаров</h1>

    <p>В нашем каталоге вы найдете тщательно отобранные товары, которые вдохновляют и радуют. Каждый элемент — это не просто продукт, а настоящая история, наполненная качеством и уникальностью.
        Здесь встречаются технологии и искусство,
        создавая идеальное симбиоз для вашего комфорта и удовольствия.</p>

    <h2 class="mb-4">Разделы каталога</h2>
    <div class="row">
        @foreach ($roots as $root)
            @include('catalog.part.category', ['category' => $root])
        @endforeach
    </div>

    <h2 class="mb-4">Популярные бренды</h2>
    <div class="row">
        @foreach ($brands as $brand)
            @include('catalog.part.brand', ['brand' => $brand])
        @endforeach
    </div>
@endsection



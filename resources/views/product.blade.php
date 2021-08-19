@extends('layouts.app')

@section('content')

    <table border="1">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>description</td>
            <td>price</td>
            <td>size</td>
            <td>is_spicy</td>
            <td>is_veg</td>
            <td>is_best offer</td>
            <td>created_at</td>
            <td>updated_at</td>
          </tr>

          @foreach($products as $product)

          <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['description'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['size'] }}</td>
            <td>{{ $product['is_spicy'] }}</td>
            <td>{{ $product['is_veg'] }}</td>
            <td>{{ $product['is_best offer'] }}</td>
            <td>{{ $product['created_at'] }}</td>
            <td>{{ $product['updated_at'] }}</td>
          </tr>

          @endforeach


      </table>

<span>
    {{ $products->links() }}
</span>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>King Pizza</h3>
            <p>150 грн</p>
            <p><a href="" class="btn btn-primary" role="button">В корзину</a>
                <a href="" class="btn btn-default"
                role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>

<style>
    .w-5{
        display:none;
    }
</style>
<div class="starter-template">
    <h1>King Pizza</h1>
    <h2>{{ $product }}</h2>
    <p>Цена: <b>120 грн.</b></p>
    <img src="">
    <p>Очень вкусная популярная пицца</p>
    <a class="btn btn-success" href="">Добавить в корзину</a>
</div>

@endsection

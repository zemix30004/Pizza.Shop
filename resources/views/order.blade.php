@extends('layouts.app')

@section('title-block')
    Продолжение заказа
@endsection

@section('content')

    <h1>Продолжение заказа</h1>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h1>King Pizza</h1>
            <p>150 грн</p>

            <form action="order/order_place" method="get">
                @csrf
                <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" placeholder="Введите имя" id="name" class="form-control"></input>


                <div class="form-group">
                <label for="name">Телефон</label>
                <input type="text" placeholder="Введите адрес телефона" id="name" class="form-control"></input>


                <div class="form-group">
                <label for="name">Адрес</label>
                <input type="text" placeholder="Введите адрес доставки" id="name" class="form-control"></input>


                <div class="form-group">
                <label for="name">Список купленных товаров</label>
                <input type="text" placeholder="" id="name" class="form-control"></input>
                <button type="submit" class="btn btn-success">Завершить заказ</button>
            </form>
        </div>
    </div>
</div>

@endsection



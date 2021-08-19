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

            <form action="cart/order" method="post">
                <div class="form-group">
                    <label for="name">Введите имя</label>
                    <input type="text" placeholder="Имя" id="name" class="form-control"></input>

                    <form action="cart/order" method="post">
                        <div class="form-group">
                            <label for="name">Введите номер телефона</label>
                            <input type="text" placeholder="Номер телефона" id="name" class="form-control"></input>

                            <form action="cart/order" method="post">
                                <div class="form-group">
                                    <label for="name">Введите адрес доставки</label>
                                    <input type="text" placeholder="Адрес доставки" id="name" class="form-control"></input>

                                    <form action="cart/order" method="post">
                                        <div class="form-group">
                                            <label for="name">Список купленных товаров</label>
                                            <input type="text" placeholder="" id="name" class="form-control"></input>
                                            <p>
                <a href="" class="btn btn-primary" role="button">Завершить заказ</a>
                <a href="" class="btn btn-default"
                role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>

@endsection



@extends('layouts.app')


@section('title-block')
    Корзина
@endsection

@section('content')

            <h1>Корзина</h1>
            <p>Оформление заказа</p>
            <form action="cart/order" method="post">
                <div class="form-group">

            <div class="panel">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Стоимость</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href=">
                                <img height="56px" src="">
                                King Pizza
                            </a>
                        </td>
                        <td><span class="badge"></span>
                            <div class="btn-group">
                            </style>
                            <label for="input"></label>
                            <input name="input" type="number" id="col" value="1">
                            <button id="plus">+</button>
                            <script>let col = document.getElementById('col');
                                let plus = document.getElementById('plus');

                                plus.onclick = function() {
                                  col.value = parseInt(col.value) + 1;
                                }</script>
                            </div>

                        </td>
                        <td>16500 грн.</td>
                        <td>16500 грн.</td>
                    </tr>
                    <tr>
                        <td colspan="3">Общая стоимость:</td>
                        <td>23100 грн.</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <div class="btn-group pull-right" role="group">
                    <button type="submit" class="btn btn-success">Оформить заказ</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection


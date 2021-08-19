@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
<h1>Главная страница</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos temporibus cum enim soluta unde ducimus dolor fuga ut itaque, blanditiis ullam modi autem. Quisquam tempore perferendis libero consectetur, hic deleniti!</p>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">Pizza.Shop</a>
</nav>
<div class="container">

    <div class="row">

        <div class="col-md-12">



        </div><!-- ./col-md-12-->

    </div><!-- ./row-->
<div class="row mt-3 mb-3">
    <div class="col-md-12">
    @if(count($products))
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Is_spicy</th>
                        <th scope="col">Is_veg</th>
                        <th scope="col">Is_best_offer</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->is_spicy }}</td>
                        <td>{{ $product->is_veg }}</td>
                        <td>{{ $product->is_best_offer }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div><!-- ./table-responsive-->


    </div><!-- ./col-md-12-->
    @endif
</div><!-- ./row-->

</div><!-- ./container-->
    <span>
        {{ $products->links() }}
    </span>
    <form action="product/cart" method="get">
        @csrf
        <div class="form-group">
            <label for="name"></label>
            <input type="text" placeholder="Введите название пиццы" id="name" class="form-control"></input>

    <style>
        .w-5{
            display:none;
        }

    </style>
    <label for="input">Количество:</label>
    <input name="input" type="number" id="col" value="1">
    <button id="plus">+</button>
    <button type="submit" class="btn btn-success">В корзину</button>

    <script>let col = document.getElementById('col');
        let plus = document.getElementById('plus');
        plus.onclick = function() {
          col.value = parseInt(col.value) + 1;
        }</script>
      </div>
    </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection

@section('aside')
@parent
<p>Дополнительная информация</p>
@endsection



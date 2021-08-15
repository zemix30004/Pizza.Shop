<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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

<style>
    .w-5{
        display:none;
    }
</style>

</body>
</html>

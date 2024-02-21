<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body> 
    @include('include.header')
    <h1>Create a Product</h1>
    <div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif 
</div> 
    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"  /> 
            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty"  /> 
            @error('qty')
            <p>{{$message}}</p>
        @enderror
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"  /> 
            @error('price')
            <p>{{$message}}</p>
        @enderror
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"  />
            @error('description')
            <p>{{$message}}</p>
        @enderror
        </div>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>
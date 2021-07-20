@extends("master")
@section("content")
<div class="details">
    <div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$products['gallery']}}" alt="img">
        </div>
        <div class="col-sm-6">
        <a href="/" class="btn btn-outline-warning">&#8592; Go back</a>
            <h3 class="mt-2">{{$products['name']}}</h3>
            <p>Price: {{$products['price']}}/-</p>
              <p>Category: {{$products['category']}}</p>
            <p>{{$products['description']}}</p>
            <div class="d-flex m-2">
            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$products['id']}} >

            <button type="" class="btn btn-success m-2">Add to cart</button>
           
            </form>
         
         <a href="" class="btn btn-primary m-2">Buy now</a>
        </div>
         </div>
         
    </div>
    </div>
</div>

@endsection
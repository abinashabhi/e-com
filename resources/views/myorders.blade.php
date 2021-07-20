@extends("master")
@section("content")



<div class="d-flex mt-5">
@foreach ($orders as $item )

<div class="cart-items" style="width: 13rem;">

<img class= "card-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
     
  <div class="cart-detail">
    <p>{{$item->name}}</p>
    <p>{{$item->price}}/-</p>
    <p>{{$item->description}}</p>    
    <p>{{$item->status}}</p>
    </div>
    

</div>
@endforeach


@endsection
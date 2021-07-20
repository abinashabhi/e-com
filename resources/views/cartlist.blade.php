<?php
use App\Http\Controllers\ProductController;


$cartCount = 0;
if(Session::has('user')){
  $cartCount = ProductController::cartCount();
}
?>

@extends("master")
@section("content")



<div class="d-flex mt-5">
@foreach ($products as $item )

<div class="cart-items" style="width: 13rem;">

<img class= "card-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
     
  <div class="cart-detail">
    <p>{{$item->name}}</p>
    <p>{{$item->price}}/-</p>
    <p>{{$item->description}}</p>    
    </div>
    <div class="cart-btn">
    <a href="/removecart/{{$item->cartId}}" class="btn btn-danger">Remove</a>
    </div>

</div>
@endforeach
</div>
@if ($cartCount == 0)
  <h2 class="text-center">Cart is empty</h2>
@else
<div class="container ">
<a href="/ordernow" class="ordernow-btn btn btn-warning form-control">Order now</a>
</div>
@endif



@endsection
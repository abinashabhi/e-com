@extends("master")
@section("content")

<h2 class="text-center mt-3">Results for products<h2>
<div class="trending-products d-flex">
@foreach ($products as $item )

<div class="card" style="width: 13rem;">
<a href="/details/{{$item['id']}}">
<img class= "card-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
     
  <div class="card-body">
    <p>{{$item["name"]}}</p>
    
    </div>
    <a href="" class="btn btn-primary">Add to cart</a>
</a>
</div>
@endforeach
</div>


@endsection
@extends("master")
@section("content")


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
  
  @foreach ($products as $item)
  <a href="/details/{{$item['id']}}">
  <div class="carousel-item {{$item['id'] == 1 ? 'active' : '' }}">
      <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>{{$item["name"]}}</h5>
        <p>{{$item["price"]}}</p>
        <p>{{$item["description"]}}</p>
      </div>
      </a>
    </div>
    @endforeach
    
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<h2 class="text-center mt-3">Trending Items<h2>
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
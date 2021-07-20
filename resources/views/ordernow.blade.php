@extends("master")
@section("content")

<div class="container order-now mt-5">
@if (Session::has('success'))
    <div class="alert alert-primary text-center">
    <p>{{ Session::get('success') }}</p>
    </div>
 @endif
<table class="table">

  <tbody>
    <tr>
      
      <td>Amount</td>
      <td>{{$total}}</td>
      
    </tr>
    <tr>
   
      <td>Tax</td>
      <td>0</td>
   
    </tr>
    <tr>
    
      <td>Delevery</td>
      <td>100</td>
    
    </tr>
    <tr>
    
    <td>Total Amaunt</td>
    <td>{{$total + 100}}</td>
  
  </tr>
  </tbody>
</table>
<form action="/orderplace" method="POST"> 
    @csrf
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" checked>
  <label class="form-check-label" for="exampleRadios1">
    cash
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="netbanking">
  <label class="form-check-label" for="exampleRadios2">
    net banking
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="cash">
  <label class="form-check-label" for="exampleRadios2">
  cash on delivery
  </label>
</div>


<button type="submit" class="btn btn-success form-control mt-4">Submit</button>
</form>
</div>



@endsection
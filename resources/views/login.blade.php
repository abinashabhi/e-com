<style>
.container{
    width:40%;
    margin:2% auto;
}
.container form{
    width:40%;
    margin:2% auto;
}
</style>
@extends('master')
@section('content')

<div class="container">

<form action="login" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary form-control mb-2">Log in</button>
  <p class="text-center">OR<p>
    <a href="/register" class="btn btn-outline-primary form-control">For new user</a>
</form>
</div>

@endsection
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
<h2 class="text-center">Register</h2>
<form action="register" method="POST">
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="userpassword" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary form-control mb-2">regiser</button>
  <p class="text-center">OR<p>
    <a href="/login" class="btn btn-outline-primary form-control">login</a>
</form>
</div>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm</title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}




    <!-- <script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("clicked!")
        })
    })
    </script> -->

   
   
</body>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
   font-size:1rem;
}
nav{
    /* width:100%; */
    background-color:none;
    padding:0 5%;
}
.slider-img{
    padding:2% 5%;
    height:450px !important;
 
}
.product-img{
    height:100px;
    width:30px;
    
}
.card{
    height:350px;
    margin:3%;
}
.card-img{
    height:250px;
}
.trending-products{
    height:100vh;
}
.card-body p{
    font-size:1.2rem;
}
a{
    text-decoration:none;
    color:#2C2E43;
}
.cart-img{
    height:200px;
    width:100px;
}
.cart-items{
    height:300px;
    width:100px;
    margin:0 3%;
}
.cart-detail{
    width:100px;
}
.cart-detail p{
    font-size:1rem;
    width:100%;
}
hr{
    top:none;
    left:none;
    right:none;
    height:3px;
    bottom:#cccc;
}
.ordernow-btn{
    margin-top:180px;
}


.carousel-caption{
   background-color:rgb(9 18 15 / 61%);
</style>


</html>
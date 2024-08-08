<!DOCTYPE html>
<html lang="en">

<head>
<base href="{{env('APP_URL')}}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Shopping Mall</title>
  <!--jQuery-->
  <!-- <script src="js/jquery.min.js"></script> -->
  <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-icons-1.11.3/bootstrap-icons-1.11.3/font/bootstrap-icons.css')}}">
</head>

<body ng-app="myapp">
  <div class="container"  ng-controller="myctrl">
   
    @include('header')
   
    @yield('content')
   
     @include('footer')
  </div> 
  </div>


 <script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="angular-route.js"></script>
 
  <script src="jquery.min.js"></script>
  <script src="angular.min.js"></script>

  <!-- <script src="app.js"></script> -->
  <script src="products.js"></script>
</body>

</html>
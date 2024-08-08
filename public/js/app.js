angular.module('myapp',['ngRoute']).config(function($routeProvider){
  $routeProvider
    .when('/',{
      templateUrl: 'home.html'
    })
    
    .when('/login',{
      templateUrl: 'login.html'
    })
    .when('/cart', {
      templateUrl: 'cart.html'
    })
    .otherwise({
      template: '<h1>404 - không tìm thấy trang </h1>'
    });
})
.controller('ctrlCha', function($scope){
  $scope.giatai = 1000000000;
  $scope.dsSp = [
    {
      id: 1,
      name: "Táo",
      price: 10 
    }, 
    {
      id: 2,
      name: "Mận",
      price: 20
    }, 
    {
      id: 3,
      name: "Dưa hấu",
      price: 30
    }, 
    {
      id: 4,
      name: "Cam",
      price: 40
    }, 
    {
      id: 5,
      name: "Dừa",
      price: 50
    },
    {
      id: 6,
      name: "Dứa",
      price: 60
    },
    {
      id:7,
      name : "Đào",
      price: 70
    }, 
    {
      id: 8,
      name: "Mãng cầu",
      price: 80
    },
    {
      id:9,
      name: "Sầu riêng",
      price: 90
    },
    {
      id: 10,
      name: "Thanh Long",
      price: 100
    }
  ]
  $scope.cart = [];
  $scope.mua = function(sp){
    if($scope.cart.filter(i=>i.id==sp.id).length==0){
      sp.quantity = 1;
      $scope.cart.push(sp);
  } else {
      $scope.cart.forEach(i => {
          if(i.id == sp.id){
              i.quantity++;
          }
      });
  }
    console.log($scope.cart); // In ra giỏ hàng
 
}
$scope.tongtien = function(){
  let sum = 0;
  $scope.cart.forEach(i => sum += i.quantity * i.price);
  return sum;
} 
// $scope.xoa = function(id){
//   let index = $scope.cart.find(i=>i.id==id)
//   $scope.cart.splice(index, i)
// }
$scope.xoa = function(index){
  
  $scope.cart.splice(index, 1)
}
})

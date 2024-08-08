// var app = angular
// .module('myapp', ['ngRoute']);
// app.config(function($routeProvider){
//     $routeProvider
//     .when('/',{
//         templateUrl: 'home.html'
//     })
//     .when('/products',{
//         templateUrl: 'products.html'
//     })
//     .when('/lienhe',{
//         templateUrl: 'lienhe.html'
//     })
//     .when('/tintuc',{
//         templateUrl: 'tintuc.html'
//     })
//     .when('/dangnhap',{
//         templateUrl: 'dangnhap.html'
//     })
//     .when('/dangki',{
//         templateUrl: 'dangki.html'
//     })
//     .when('/giohang',{
//         templateUrl: 'giohang.html'
//     })
//     .otherwise({
//         redirectTo: '/home'
//     });
// });

angular.module('myapp', ['ngRoute'])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'home.html?' + Math.random(),
      })
      .when('/lienhe', {
        templateUrl: 'lienhe.html?' + Math.random(),
        // controller: 'loginCtrl'
      })
     
      .otherwise({
        template: '<h1>404 - không tìm thấy trang </h1>'
      });
  })
  .controller('myctrl',function($scope ){

    var list=[
        
            {
                "img": "product-1.jpg",
                "name": "Cà chua",
                "price": 10000,
            },
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000},
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000},
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000},
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000},
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000},
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000},
            {"img" : "product-1.jpg", "name":"Cà chua", "price":10000}
        
        ];
        $scope.products = list;

    });
//    app.run(function($rootScope){
//     $rootScope.$on('$routeChangeStart', function(){
//         $rootScope.loading = true;
//     });
//     $rootScope.$on('$routeChangeSuccess', function(){
//         $rootScope.loading = false;
//     });
//     $rootScope.$on('$routeChangeError', function(){
//         $rootScope.loading = false;
//         alert("ui cha , lỗi rùi nek khum tải được nữa âu ");
//     });

// });








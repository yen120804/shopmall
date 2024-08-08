var app=angular
.module('myapp', []);
app.controller('myctrl',function($scope ,$http){

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

    })
    app.config(function($routeProvider){
    $routeProvider
    .when('/',{
        templateUrl: 'home.html'
    })
    .when('/products',{
        templateUrl: 'products.html'
    })
    .when('/lienhe',{
        templateUrl: 'lienhe.html'
    })
    .when('/tintuc',{
        templateUrl: 'tintuc.html'
    })
    .when('/dangnhap',{
        templateUrl: 'dangnhap.html'
    })
    .when('/dangki',{
        templateUrl: 'dangki.html'
    })
    .when('/giohang',{
        templateUrl: 'giohang.html'
    })
    .otherwise({
        redirectTo: '/home'
    });
});